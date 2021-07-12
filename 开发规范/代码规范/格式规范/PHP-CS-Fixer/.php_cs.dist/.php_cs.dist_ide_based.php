<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

/**
 * IDE-Based：配合IDE，从laravel-shift修改调整
 * version:3.0
 * (官方)参考配置文档(更全更新)：https://github.com/FriendsOfPHP/PHP-CS-Fixer/tree/3.0/doc/rules
 * (推荐)参考配置文档(可读性高，同时支持版本切换和搜索)：https://mlocati.github.io/php-cs-fixer-configurator/#version:3.0
 * Q1:IDE中链式调用方法对齐的选项在php-cs-fixer中暂未找到对应参数.
 */
$rules = [
    /*------------------------------------------------------规则源------------------------------------------------------*/
    '@PSR2'                                       => true,
    /*---------------------------------------------------制表符和缩进---------------------------------------------------*/
    /*
     * IDE配置
     */
    //代码必须使用配置的缩进类型
    'indentation_type'                            => true,

    /*
     * 非IDE配置
     */
    //缩进-数组的每个元素必须精确缩进一次（强制默认）
    'array_indentation'                           => true,
    /*-------------------------------------------------------空格-------------------------------------------------------*/
    /*
     * IDE配置
     */
    //二元运算符应按配置用空格包围
    'binary_operator_spaces'                      => [
        'default'   => 'single_space',
        'operators' => ['=>' => 'align_single_space'],
    ],
    //强制转换和变量之间应该有一个空格或没有空格
    'cast_spaces'                                 => true,
    //类定义行之间的空格
    'class_definition'                            => true,
    //字符连接空格
    'concat_space'                                => [
        'spacing' => 'none',
    ],
    //声明语句中的等号应该用空格包围或不跟随配置
    'declare_equal_normalize'                     => true,
    //空格应正确放置在函数声明中
    'function_declaration'                        => true,
    //确保函数的参数和它的类型提示之间有一个空格
    'function_typehint_space'                     => true,
    //Include/Require 和文件路径应该用一个空格分隔。文件路径不应放在括号内
    'include'                                     => true,
    //在方法参数和方法调用中，每个逗号前不能有空格，每个逗号后必须有一个空格。参数列表可以分成多行，其中每个后续行缩进一次。这样做时，列表中的第一项必须在下一行，并且每行必须只有一个参数
    'method_argument_space'                       => true,
    //禁止结束分号前的单行空格
    'no_singleline_whitespace_before_semicolons'  => true,
    //进行方法或函数调用时，方法或函数名称与左括号之间不得有空格
    'no_spaces_after_function_name'               => true,
    //偏移大括号周围不得有空格
    'no_spaces_around_offset'                     => true,
    //左括号后不能有空格。右括号前不能有空
    'no_spaces_inside_parenthesis'                => true,
    //运算符 => 不应被多行空格包围
    'no_multiline_whitespace_around_double_arrow' => true,
    //命名空间声明行不应包含前导空格
    'no_leading_namespace_whitespace'             => true,
    //在结束分号之前禁止多行空格或将分号移动到新行以进行链式调用
    'multiline_whitespace_before_semicolons'      => [
        //在结束分号之前禁止多行空格或将分号移动到新行以进行链式调用
        'strategy' => 'no_multi_line',
    ],
    //例子后面应该是冒号，而不是分号
    'switch_case_semicolon_to_colon'              => true,
    //在数组声明中，每个逗号后必须有一个空格
    'whitespace_after_comma_in_array'             => true,
    //修复分号后的空格
    'space_after_semicolon'                       => true,
    //删除冒号和大小写值之间的额外空格
    'switch_case_space'                           => true,
    //标准化三元运算符周围的空格
    'ternary_operator_spaces'                     => true,
    //数组的格式应该像函数/方法的参数一样，没有前面或后面的单行空格
    'trim_array_spaces'                           => true,
    //删除非空行末尾的尾随空格
    'no_trailing_whitespace'                      => true,
    //注释或 PHPDoc 中不得有尾随空格
    'no_trailing_whitespace_in_comment'           => true,
    //在数组声明中，每个逗号前不能有空格
    'no_whitespace_before_comma_in_array'         => true,
    //删除空行末尾的尾随空格
    'no_whitespace_in_blank_line'                 => true,
    //逻辑非运算符 (!) 应该有一个尾随空格
    'not_operator_with_successor_space'           => true,
    //对象运算符 -> 和 ?-> 前后不应有空格
    'object_operator_without_whitespace'          => true,
    /*----------------------------------------------------换行和括号----------------------------------------------------*/
    /*
     * 换行和括号
     */
    //确保与 PHP 打开标记在同一行上没有代码
    'linebreak_after_opening_tag'                 => true,

    //非IDE
    //每个结构体的主体必须用大括号括起来。牙套应该正确放置。大括号的主体应适当缩进
    'braces'                                      => true,
    //删除控制语句周围不需要的括号
    'no_unneeded_control_parentheses'             => true,
    //每条语句不能声明多个属性或常量
    'single_class_element_per_statement'          => true,
    //每个声明必须有一个 use 关键字
    'single_import_per_statement'                 => true,
    /*-------------------------------------------------------空行-------------------------------------------------------*/
    //IDE相关配置
    /*
     * 空行
     */
    //空行-打开标签后的空行
    'blank_line_after_opening_tag'                => true,
    //空行-命名空间后的空行
    'blank_line_after_namespace'                  => true,
    //空行-在命名空间声明之前应该正好有一个空行
    'single_blank_line_before_namespace'          => true,
    //类开大括号后不应有空行
    'no_blank_lines_after_class_opening'          => true,
    //空行-语句前的空行
    'blank_line_before_statement'                 => [
        //返回语句前空行
        'statements' => ['return'],
    ],
    //空行--类元素之间的分隔空行
    'class_attributes_separation'                 => [
        'elements' => ['method'],
    ],

    /*
     * 非IDE配置
     */
    //空行-每个命名空间 use 必须在自己的一行中，并且在 use 语句块之后必须有一个空行
    'single_line_after_imports'                   => true,
    //没有结束标记的 PHP 文件必须始终以单个空格或者换行结尾
    'single_blank_line_at_eof'                    => true,
    //所有 PHP 文件必须使用相同的空行结尾
    'line_ending'                                 => true,
    //在配置之后删除额外的空行和/或空行
    'no_extra_blank_lines'                        => [
        'tokens' => [
            'extra',
            'throw',
            'use',
            'use_trait',
        ],
    ],
    //文档块和文档元素之间不应有空行
    'no_blank_lines_after_phpdoc'                 => true,
    /*-----------------------------------------------------PHPDoc-----------------------------------------------------*/
    /*
     * IDE配置
     */
    //单行@var PHPDoc 应该有适当的间距
    'phpdoc_single_line_var_spacing'              => true,

    /*
     * 非IDE配置
     */
    //PHPDoc 中应该省略@access 注释
    'phpdoc_no_access'                            => true,
    //PHPDoc 中应省略@package 和@subpackage 注释
    'phpdoc_no_package'                           => true,
    //不继承的 Classy 不能有 @inheritdoc 标签
    'phpdoc_no_useless_inheritdoc'                => true,
    //标量类型应始终以相同的形式编写。 int 不是整数，bool 不是布尔值，float 不是实数或双精度数
    'phpdoc_scalar'                               => true,
    //文件块的缩进方式应与文档中的子项目相同
    'phpdoc_indent'                               => true,
    //修复 PHPDoc 内联标签
    'phpdoc_inline_tag'                           => true,
    //PHPDoc 摘要应以句号、感叹号或问号结尾
    'phpdoc_summary'                              => true,
    //Docblocks 应该只用于结构元素
    'phpdoc_to_comment'                           => true,
    //PHPDoc 应该以内容开始和结束，不包括文档块的第一行和最后一行
    'phpdoc_trim'                                 => true,
    //PHPDoc 中的标准 PHP 类型必须使用正确的大小写
    'phpdoc_types'                                => true,
    //经典属性的 @var 和 @type 注释不应包含名称
    'phpdoc_var_without_name'                     => true,
    //不应有空的 PHPDoc 块
    'no_empty_phpdoc'                             => true,
    /*-----------------------------------------------------代码转换-----------------------------------------------------*/
    /*
     * IDE配置
     */
    //关键字空格，用 elseif 代替 else if
    'elseif'                                      => true,
    //PHP 数组应使用配置的语法进行声明
    'array_syntax'                                => ['syntax' => 'short'],
    //强制转换应该小写
    'lowercase_cast'                              => true,
    //关键词必须小写
    'lowercase_keywords'                          => true,
    //Cast (boolean) and (integer) 应该写成 (bool) and (int), (double) and (real) as (float), (binary) as (string)
    'short_scalar_cast'                           => true,
    // 希望返回 void 的 return 语句不应返回 null（disabled by Shift）
    'simplified_null_return'                      => false,
    //单元运算符应放在其操作数的旁边
    'unary_operator_spaces'                       => true,
    //必须在所有属性和方法上声明可见性； abstract 和 final 必须在可见性之前声明； static 必须在可见性之后声明
    'visibility_required'                         => [
        'elements' => ['method', 'property'],
    ],
    //数组索引应始终使用方括号编写
    'normalize_index_brace'                       => true,
    //多行数组、参数列表和参数列表必须有一个尾随逗号(3.0:trailing_comma_in_multiline)
    'trailing_comma_in_multiline_array'           => true,

    /*
     * 非IDE配置
     */
    //只有一行实际内容的单行注释和多行注释应该使用 // 语法
    'single_line_comment_style'                   => [
        'comment_types' => ['hash'],
    ],
    //用 != 替换所有 <>
    'standardize_not_equals'                      => true,
    //函数末尾不应有空的 return 语句
    'no_useless_return'                           => true,
    //将简单字符串的双引号转换为单引号
    'single_quote'                                => true,
    // 类静态引用 self、static 和 parent 必须是小写的（added from Symfony）
    'lowercase_static_reference'                  => true,
    // 魔术方法定义和调用必须使用正确的大小写（added from Symfony）
    'magic_method_casing'                         => true,
    //魔术常数应该使用正确的大小写来引用
    'magic_constant_casing'                       => true,
    //应使用正确的大小写调用 PHP 定义的函数
    'native_function_casing'                      => true,
    //应使用主函数而不是别名
    'no_alias_functions'                          => true,
    //不应使用使用双感叹号的 Short cast bool
    'no_short_bool_cast'                          => true,
    //应该使用语言构造 print 或 echo
    'no_mixed_echo_print'                         => [
        'use' => 'echo',
    ],
    //在函数参数中，在非默认参数之前不能有带有默认值的参数
    'no_unreachable_default_argument_value'       => true,
    //内部类或接口元素 self 应该优先于类名本身
    'self_accessor'                               => true,
    //将函数中的参数和返回类型限制的样式更改为短版本，比如\Foo\Bar =》 Bar(added by Shift)
    'fully_qualified_strict_types'                => true,
    //后置递增代替前置递增
    'increment_style'                             => ['style' => 'post'],
    //删除无用（分号）语句
    'no_empty_statement'                          => true,
    //删除列表函数调用中的尾随逗号
    'no_trailing_comma_in_list_call'              => true,
    //PHP 单行数组不应该有尾随逗号
    'no_trailing_comma_in_singleline_array'       => true,
    //删除 use 子句中的前导斜杠
    'no_leading_import_slash'                     => true,
    //必须删除未使用的 use 语句
    'no_unused_imports'                           => true,
    //PHP 代码必须仅使用没有 BOM 的 UTF-8（删除 BOM）
    'encoding'                                    => true,
    //PHP代码必须使用长的<?php标签或短的<?标签，而不是其他标签的变化
    'full_opening_tag'                            => true,
    //尽可能将 heredoc 转换为 nowdoc
    'heredoc_to_nowdoc'                           => true,
    //结束? > 标签必须从只包含 PHP 的文件中省略
    'no_closing_tag'                              => true,
    //导入排序
    'ordered_imports'                             => ['sortAlgorithm' => 'length'],
    /*-----------------------------------------------------代码生成-----------------------------------------------------*/
    /*
     * 代码生成
     */
    /*------------------------------------------------------排列--------------------------------------------------------*/
    /*
     * 排列
     */
    /*-------------------------------------------------------其他-------------------------------------------------------*/
    /*
     * 其他
     */
];

$finder = Finder::create()
                ->in(__DIR__)
                ->name('*.php')
                ->notName('*.blade.php')
                ->ignoreDotFiles(true)
                ->ignoreVCS(true);

return Config::create()
             ->setFinder($finder)
             ->setRules($rules)
             ->setRiskyAllowed(true)
             ->setUsingCache(true);
