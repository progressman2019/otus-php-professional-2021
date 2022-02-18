<?php

declare(strict_types=1);

namespace App\Framework\Router;

use App\Framework\Http\RequestInterface;
use UnexpectedValueException;

class Route
{
    private string $uri;
    private array  $handler;
    private array  $methods;

    public function __construct(string $uri, array $handler, array $methods)
    {
        $this->throwExceptionIfClassNotFound($handler[0]);
        $this->throwExceptionIfMethodNotFoundIn($handler[1], $handler[0]);

        $this->uri = $uri;
        $this->handler = $handler;
        $this->methods = $methods;
    }

    private function throwExceptionIfClassNotFound(string $className): void
    {
        if (!class_exists($className)) {
            throw new UnexpectedValueException("Класс $className не найден");
        }
    }

    private function throwExceptionIfMethodNotFoundIn(string $methodName, string $className): void
    {
        if (!method_exists($className, $methodName)) {
            throw new UnexpectedValueException("Метод $methodName не найден в классе $className");
        }
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getMethods(): array
    {
        return $this->methods;
    }

    public function getHandler(): array
    {
        return $this->handler;
    }

    public function match(RequestInterface $request): bool
    {
        return ($this->getUri() === $request->getUriPath())
            and (in_array($request->getMethod(), $this->getMethods()));
    }
}