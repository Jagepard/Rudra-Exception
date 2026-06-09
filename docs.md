## Table of contents
- [Rudra\Exceptions\ExceptionInterface](#rudra_exceptions_exceptioninterface)
- [Rudra\Exceptions\LogicException](#rudra_exceptions_logicexception)
- [Rudra\Exceptions\MiddlewareException](#rudra_exceptions_middlewareexception)
- [Rudra\Exceptions\NotFoundException](#rudra_exceptions_notfoundexception)
- [Rudra\Exceptions\RouterException](#rudra_exceptions_routerexception)
- [Rudra\Exceptions\RudraException](#rudra_exceptions_rudraexception)
- [Rudra\Exceptions\RuntimeException](#rudra_exceptions_runtimeexception)


---



<a id="rudra_exceptions_exceptioninterface"></a>

### Class: Rudra\Exceptions\ExceptionInterface
| Visibility | Function |
|:-----------|:---------|
| abstract public | `getMessage(): string`<br> |
| abstract public | `getCode()`<br> |
| abstract public | `getFile(): string`<br> |
| abstract public | `getLine(): int`<br> |
| abstract public | `getTrace(): array`<br> |
| abstract public | `getPrevious(): ?Throwable`<br> |
| abstract public | `getTraceAsString(): string`<br> |
| abstract public | `__toString(): string`<br> |


<a id="rudra_exceptions_logicexception"></a>

### Class: Rudra\Exceptions\LogicException
| Visibility | Function |
|:-----------|:---------|
| public | `__construct(string $message, int $code, ?Throwable $previous)`<br> |
| public | `__wakeup()`<br> |
| final public | `getMessage(): string`<br> |
| final public | `getCode()`<br> |
| final public | `getFile(): string`<br> |
| final public | `getLine(): int`<br> |
| final public | `getTrace(): array`<br> |
| final public | `getPrevious(): ?Throwable`<br> |
| final public | `getTraceAsString(): string`<br> |
| public | `__toString(): string`<br> |


<a id="rudra_exceptions_middlewareexception"></a>

### Class: Rudra\Exceptions\MiddlewareException
| Visibility | Function |
|:-----------|:---------|
| public | `__construct(string $message, int $code, ?Throwable $previous)`<br> |
| public | `__wakeup()`<br> |
| final public | `getMessage(): string`<br> |
| final public | `getCode()`<br> |
| final public | `getFile(): string`<br> |
| final public | `getLine(): int`<br> |
| final public | `getTrace(): array`<br> |
| final public | `getPrevious(): ?Throwable`<br> |
| final public | `getTraceAsString(): string`<br> |
| public | `__toString(): string`<br> |


<a id="rudra_exceptions_notfoundexception"></a>

### Class: Rudra\Exceptions\NotFoundException
| Visibility | Function |
|:-----------|:---------|
| public | `__construct(string $message, int $code, ?Throwable $previous)`<br> |
| public | `__wakeup()`<br> |
| final public | `getMessage(): string`<br> |
| final public | `getCode()`<br> |
| final public | `getFile(): string`<br> |
| final public | `getLine(): int`<br> |
| final public | `getTrace(): array`<br> |
| final public | `getPrevious(): ?Throwable`<br> |
| final public | `getTraceAsString(): string`<br> |
| public | `__toString(): string`<br> |


<a id="rudra_exceptions_routerexception"></a>

### Class: Rudra\Exceptions\RouterException
| Visibility | Function |
|:-----------|:---------|
| public | `__construct(string $message, int $code, ?Throwable $previous)`<br>Constructs a new RouterException and sets a global exception handler. |
| public | `exception_handler(Throwable $exception): void`<br>Custom exception handler triggered by this class.<br>Uses RedirectFacade to send an HTTP status code and then calls the error handler. |
| public | `__wakeup()`<br> |
| final public | `getMessage(): string`<br> |
| final public | `getCode()`<br> |
| final public | `getFile(): string`<br> |
| final public | `getLine(): int`<br> |
| final public | `getTrace(): array`<br> |
| final public | `getPrevious(): ?Throwable`<br> |
| final public | `getTraceAsString(): string`<br> |
| public | `__toString(): string`<br> |


<a id="rudra_exceptions_rudraexception"></a>

### Class: Rudra\Exceptions\RudraException
| Visibility | Function |
|:-----------|:---------|
| public | `__construct(string $message, int $code, ?Throwable $previous)`<br> |
| public | `__wakeup()`<br> |
| final public | `getMessage(): string`<br> |
| final public | `getCode()`<br> |
| final public | `getFile(): string`<br> |
| final public | `getLine(): int`<br> |
| final public | `getTrace(): array`<br> |
| final public | `getPrevious(): ?Throwable`<br> |
| final public | `getTraceAsString(): string`<br> |
| public | `__toString(): string`<br> |


<a id="rudra_exceptions_runtimeexception"></a>

### Class: Rudra\Exceptions\RuntimeException
| Visibility | Function |
|:-----------|:---------|
| public | `__construct(string $message, int $code, ?Throwable $previous)`<br> |
| public | `__wakeup()`<br> |
| final public | `getMessage(): string`<br> |
| final public | `getCode()`<br> |
| final public | `getFile(): string`<br> |
| final public | `getLine(): int`<br> |
| final public | `getTrace(): array`<br> |
| final public | `getPrevious(): ?Throwable`<br> |
| final public | `getTraceAsString(): string`<br> |
| public | `__toString(): string`<br> |


---

###### created with [Rudra-Documentation-Collector](https://github.com/Jagepard/Rudra-Documentation-Collector)
