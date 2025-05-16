将入参数据绑定到对象中，支持一维数据，也支持多维数据，参考java的pojo而来

# 使用
需要再config中启用popo中间件
PoPoMiddleware::class

定义相对应的数据，待完善

```php
class TestParam extends \Leo\Popo\Popo
{
    private int $intValue;
    private string $stringValue;
    private array $arrayValue;

    private UserParam $objValue1;

    #[ObjArray(UserParam::class)]
    private array $objValue2;
}
```