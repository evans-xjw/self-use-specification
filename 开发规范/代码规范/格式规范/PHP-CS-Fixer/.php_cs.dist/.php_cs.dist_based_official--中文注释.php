<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

/**
 * Official-Based：官方全量配置
 * version:3.0
 * (官方)参考配置文档(更全更新)：https://github.com/FriendsOfPHP/PHP-CS-Fixer/tree/3.0/doc/rules
 * (推荐)参考配置文档(可读性高，同时支持版本切换和搜索)：https://mlocati.github.io/php-cs-fixer-configurator/#version:3.0
 * Q1:IDE中链式调用方法对齐的选项在php-cs-fixer中暂未找到对应参数.
 */
$rules = [
    /*------------------------------------------------------alias------------------------------------------------------*/
    //array_push($x, $y)转换为$x[] = $y
    'array_push'                                       => ' ',
    //将反引号运算符转换为shell_exec调用
    'backtick_to_shell_exec'                           => ' ',
    //将弃用的ereg正则表达式函数替换为preg
    'ereg_to_preg'                                     => ' ',
    //用相应的 mb 函数替换非多字节安全函数
    'mb_str_functions'                                 => ' ',
    //应使用主函数而不是别名
    'no_alias_functions'                               => ' ',
    //应使用主语言结构而不是别名
    'no_alias_language_construct_call'                 => ' ',
    //print和echo互相替换
    'no_mixed_echo_print'                              => ' ',
    //转换pow为**运算符
    'pow_to_exponentiation'                            => ' ',
    //用它们的类似物替换rand, srand,getrandmax函数调用mt_*
    'random_api_migration'                             => ' ',
    //应使用强制转换，而不是settype
    'set_type_to_cast'                                 => ' ',
    /*-------------------------------------------------array_notation-------------------------------------------------*/
    //PHP 数组应使用配置的语法进行声明
    'array_syntax'                                     => ' ',
    //运算符=>不应被多行空格包围
    'no_multiline_whitespace_around_double_arrow'      => ' ',
    //PHP 单行数组不应该有尾随逗号
    'no_trailing_comma_in_singleline_array'            => ' ',
    //在数组声明中，每个逗号前不能有空格
    'no_whitespace_before_comma_in_array'              => ' ',
    //数组索引应始终使用方括号编写
    'normalize_index_brace'                            => ' ',
    //数组应该像函数/方法参数一样格式化，没有前导或尾随单行空格
    'trim_array_spaces'                                => ' ',
    //在数组声明中，每个逗号后必须有一个空格
    'whitespace_after_comma_in_array'                  => ' ',
    /*------------------------------------------------------basic------------------------------------------------------*/
    //每个结构体的主体必须用大括号括起来。牙套应该正确放置。大括号的主体应适当缩进
    'braces'                                           => ' ',
    //PHP 代码必须仅使用没有 BOM 的 UTF-8（删除 BOM）
    'encoding'                                         => ' ',
    //删除零宽度空格 (ZWSP)、不间断空格 (NBSP) 和其他不可见的 unicode 符号
    'non_printable_character'                          => ' ',
    //类必须位于与其命名空间匹配的路径中，至少是一个命名空间深度，并且类名应与文件名匹配。
    'psr_autoloading'                                  => ' ',
    /*-----------------------------------------------------casing-----------------------------------------------------*/
    //PHP 常量true、false和null必须使用正确的大小写
    'constant_case'                                    => ' ',
    //PHP 关键字必须小写
    'lowercase_keywords'                               => ' ',
    //类静态引用self，static并且parent必须为小写
    'lowercase_static_reference'                       => ' ',
    //魔术常数应该使用正确的大小写来引用
    'magic_constant_casing'                            => ' ',
    //魔术方法定义和调用必须使用正确的大小写
    'magic_method_casing'                              => ' ',
    //应使用正确的大小写调用 PHP 定义的函数
    'native_function_casing'                           => ' ',
    //函数的类型提示应使用正确的大小写
    'native_function_type_declaration_casing'          => ' ',
    /*--------------------------------------------------cast_notation--------------------------------------------------*/
    //强制转换和变量之间应该有一个空格或没有空格
    'cast_spaces'                                      => ' ',
    //强制转换表应该小写
    'lowercase_cast'                                   => ' ',
    //替代对象intval，floatval，doubleval，strval和boolval函数调用与根据类型转换操作符
    'modernize_types_casting'                          => ' ',
    //短投bool不应该使用采用双感叹号
    'no_short_bool_cast'                               => ' ',
    //必须设置变量null而不是使用(unset)强制转换
    'no_unset_cast'                                    => ' ',
    //转换(boolean)和(integer)应该写成(bool)和(int)，(double)和(real)为(float)，(binary)如(string)
    'short_scalar_cast'                                => ' ',
    /*-------------------------------------------------class_notation-------------------------------------------------*/
    //类、特征和界面元素必须用一个或没有一个空行分隔
    'class_attributes_separation'                      => ' ',
    //类、特征或接口定义的关键字周围的空格应该是一个空格
    'class_definition'                                 => ' ',
    //所有类都必须是最终的，除了抽象类和 Doctrine 实体
    'final_class'                                      => ' ',
    //内部类应该是final
    'final_internal_class'                             => ' ',
    //abstract类的所有public方法都应该是final
    'final_public_method_for_abstract_class'           => ' ',
    //类大括号后不应有空行
    'no_blank_lines_after_class_opening'               => ' ',
    //属性不得显式初始化null，除非它们具有类型声明（PHP 7.4）
    'no_null_property_initialization'                  => ' ',
    //将 PHP4 样式的构造函数转换为__construct
    'no_php4_constructor'                              => ' ',
    //一个final类不能有final方法，private方法也不能有final
    'no_unneeded_final_method'                         => ' ',
    //对类/接口/特征的元素进行排序
    'ordered_class_elements'                           => ' ',
    //对interface子句中的接口进行排序
    'ordered_interfaces'                               => ' ',
    //特征use语句必须按字母顺序排序
    'ordered_traits'                                   => ' ',
    //尽可能将protected变量和方法转换为private
    'protected_to_private'                             => ' ',
    //内部类或接口元素self应该优先于类名本身
    'self_accessor'                                    => ' ',
    //内部final类或匿名类self应该优先于static
    'self_static_accessor'                             => ' ',
    //每条语句不得声明多个属性或常量
    'single_class_element_per_statement'               => ' ',
    //每个特征use必须作为单个语句完成
    'single_trait_insert_per_statement'                => ' ',
    //必须在所有属性和方法上声明可见性；abstract并且final必须在可见性之前声明；static必须在可见性之后声明
    'visibility_required'                              => ' ',
    /*---------------------------------------------------class_usage---------------------------------------------------*/
    //应该使用DateTimeImmutable类而不是DateTime
    'date_time_immutable'                              => ' ',
    /*-----------------------------------------------------comment-----------------------------------------------------*/
    //当用于结构元素时，带有注释的注释应该是 docblock。
    'comment_to_phpdoc'                                => ' ',
    //添加、替换或删除标题注释
    'header_comment'                                   => ' ',
    //DocBlocks 必须以两个星号开头，多行注释必须以一个星号开头，在斜杠之后。两者都必须在结束斜线前以一个星号结尾
    'multiline_comment_opening_closing'                => ' ',
    //不应有任何空注释
    'no_empty_comment'                                 => ' ',
    //注释或 PHPDoc 中不得有尾随空格
    'no_trailing_whitespace_in_comment'                => ' ',
    //单行注释和只有一行实际内容的多行注释应该使用//语法。
    'single_line_comment_style'                        => ' ',
    /*------------------------------------------------constant_notation------------------------------------------------*/
    //\在内部常量的常量调用之前添加前导以加快解析速度。常量名称匹配区分大小写，除了null,false和true
    'native_constant_invocation'                       => ' ',
    /*------------------------------------------------control_structure------------------------------------------------*/
    //elseif应该使用关键字而不是else if使所有控制关键字看起来像单个单词
    'elseif'                                           => ' ',
    //Include/Require 和文件路径应该用一个空格分隔。文件路径不应放在括号下
    'include'                                          => ' ',
    //将控制结构替代语法替换为使用大括号
    'no_alternative_syntax'                            => ' ',
    //当在非空案例正文中故意落空时，必须有注释
    'no_break_comment'                                 => ' ',
    //用if替换连续的elseif
    'no_superfluous_elseif'                            => ' ',
    //删除列表函数调用中的尾随逗号
    'no_trailing_comma_in_list_call'                   => ' ',
    //删除控制语句周围不需要的括号
    'no_unneeded_control_parentheses'                  => ' ',
    //删除不需要的花括号，这些花括号是多余的，不是控制结构体的一部分
    'no_unneeded_curly_braces'                         => ' ',
    //不应该有无用的else情况
    'no_useless_else'                                  => ' ',
    //简化if返回其条件布尔结果的控制结构
    'simplified_if_return'                             => ' ',
    //大小写后面应该跟一个冒号而不是分号
    'switch_case_semicolon_to_colon'                   => ' ',
    //删除冒号和大小写值之间的额外空格
    'switch_case_space'                                => ' ',
    //开关案例不能以continue但结束break
    'switch_continue_to_break'                         => ' ',
    //多行数组、参数列表和参数列表必须有一个尾随逗号
    'trailing_comma_in_multiline'                      => ' ',
    //根据配置以 Yoda 风格 ( true)、非 Yoda 风格 ( ['equal' => false, 'identical' => false, 'less_and_greater' => false])编写条件或忽略这些条件 ( null)
    'yoda_style'                                       => ' ',
    /*-----------------------------------------------doctrine_annotation-----------------------------------------------*/
    //Doctrine 注释必须使用配置的运算符在数组中进行赋值
    'doctrine_annotation_array_assignment'             => ' ',
    //没有参数的 Doctrine 注释必须使用配置的语法
    'doctrine_annotation_braces'                       => ' ',
    //Doctrine 注释必须缩进四个空格
    'doctrine_annotation_indentation'                  => ' ',
    //修复了 Doctrine 注释中的空格
    'doctrine_annotation_spaces'                       => ' ',
    /*------------------------------------------------function_notation------------------------------------------------*/
    //dirname用第二个$level参数仅通过一个调用替换多个嵌套调用。需要 PHP >= 7.0
    'combine_nested_dirname'                           => ' ',
    //对fopen调用中的标志进行排序，b并且t必须在最后
    'fopen_flag_order'                                 => ' ',
    //fopen调用中的标志必须省略t，并且b必须一致地省略或包含
    'fopen_flags'                                      => ' ',
    //空格应正确放置在函数声明中
    'function_declaration'                             => ' ',
    //确保函数的参数和它的类型提示之间有一个空格
    'function_typehint_space'                          => ' ',
    //implode必须按文档顺序使用 2 个参数调用函数
    'implode_call'                                     => ' ',
    //Lambda 不得导入它不使用的变量
    'lambda_not_used_import'                           => ' ',
    //在方法参数和方法调用中，每个逗号前不能有空格，每个逗号后必须有一个空格。参数列表可以分成多行，其中每个后续行缩进一次。这样做时，列表中的第一项必须在下一行，并且每行必须只有一个参数
    'method_argument_space'                            => ' ',
    //\在函数调用之前添加前导以加快解析速度
    'native_function_invocation'                       => ' ',
    //进行方法或函数调用时，方法或函数名称与左括号之间不得有空格
    'no_spaces_after_function_name'                    => ' ',
    //在函数参数中，在非默认参数之前不能有带有默认值的参数
    'no_unreachable_default_argument_value'            => ' ',
    //不能sprintf只有第一个参数的调用
    'no_useless_sprintf'                               => ' ',
    //?在具有默认null值的参数的类型声明之前添加或删除
    'nullable_type_declaration_for_default_null_value' => ' ',
    //实验性：采用@param非混合类型的注释并相应地调整函数签名。需要 PHP >= 7.0
    'phpdoc_to_param_type'                             => ' ',
    //实验性：@var对非混合类型进行注释并相应地调整属性签名。需要 PHP >= 7.4
    'phpdoc_to_property_type'                          => ' ',
    //实验性：@return对非混合类型进行注释并相应地调整函数签名。需要 PHP >= 7.0。
    'phpdoc_to_return_type'                            => ' ',
    //call_user_func*在可能的情况下，必须在不使用的情况下调用 Callable
    'regular_callable_call'                            => ' ',
    //根据配置，在返回类型声明中，冒号前应该有一个空格或没有空格，并且在冒号后有一个空格
    'return_type_declaration'                          => ' ',
    //抛出异常必须在单行中完成
    'single_line_throw'                                => ' ',
    //$this必须声明Lambda 不是（间接）引用static
    'static_lambda'                                    => ' ',
    //带有单行返回语句的匿名函数必须使用箭头函数
    'use_arrow_functions'                              => ' ',
    //void为缺少 return 语句或为空 return 语句的函数添加返回类型，但优先考虑@return注释。需要 PHP >= 7.1
    'void_return'                                      => ' ',
    /*-----------------------------------------------------import-----------------------------------------------------*/
    //将导入参数和返回参数中的返回类型转换为短版本而不是使用全路径
    'fully_qualified_strict_types'                     => ' ',
    //导入或完全限定全局类/函数/常量
    'global_namespace_import'                          => ' ',
    //必须对相同的命名空间进行组使用
    'group_import'                                     => ' ',
    //删除use子句中的前导斜杠
    'no_leading_import_slash'                          => ' ',
    //use必须删除未使用的语句
    'no_unused_imports'                                => ' ',
    //导入排序
    'ordered_imports'                                  => ' ',
    //每个声明必须有一个 use 关键字
    'single_import_per_statement'                      => ' ',
    //每个命名空间 use 必须在自己的一行中，并且在 use 语句块之后必须有一个空行
    'single_line_after_imports'                        => ' ',
    /*------------------------------------------------language_construct------------------------------------------------*/
    //将::class关键字转换为 FQCN 字符串
    'class_keyword_remove'                             => ' ',
    //isset($var) &&多次使用应在一次调用中完成
    'combine_consecutive_issets'                       => ' ',
    //调用unset多个项目应该在一次调用中完成
    'combine_consecutive_unsets'                       => ' ',
    //声明语句中的等号应该用空格包围或不跟随配置
    'declare_equal_normalize'                          => ' ',
    //dirname(__FILE__)用等效__DIR__常量替换表达式
    'dir_constant'                                     => ' ',
    //错误控制运算符应添加到弃用通知中和/或从其他情况中删除
    'error_suppression'                                => ' ',
    //将花括号添加到间接变量中，使其清晰易懂。需要 PHP >= 7.0
    'explicit_indirect_variable'                       => ' ',
    //用常量替换核心函数调用返回常量
    'function_to_constant'                             => ' ',
    //用is_null($var)替换表达式null === $var
    'is_null'                                          => ' ',
    //属性应设置为null而不是使用unset
    'no_unset_on_property'                             => ' ',
    //确保语言结构后有一个空格
    'single_space_after_construct'                     => ' ',
    /*--------------------------------------------------list_notation--------------------------------------------------*/
    //列表（array解构）赋值应该使用配置的语法进行声明。需要 PHP >= 7.1
    'list_syntax'                                      => ' ',
    /*-----------------------------------------------namespace_notation-----------------------------------------------*/
    //命名空间声明后必须有一个空行
    'blank_line_after_namespace'                       => ' ',
    //命名空间不得包含空格、注释或 PHPDoc
    'clean_namespace'                                  => ' ',
    //命名空间声明前不应有空行
    'no_blank_lines_before_namespace'                  => ' ',
    //命名空间声明行不应包含前导空格
    'no_leading_namespace_whitespace'                  => ' ',
    //在命名空间声明之前应该正好有一个空行
    'single_blank_line_before_namespace'               => ' ',
    /*-----------------------------------------------------naming-----------------------------------------------------*/
    //替换名称中偶然使用的同形文字（非 ascii 字符
    'no_homoglyph_names'                               => ' ',
    /*----------------------------------------------------operator----------------------------------------------------*/
    //二元运算符应按配置用空格包围
    'binary_operator_spaces'                           => ' ',
    //串联应该根据配置间隔开
    'concat_space'                                     => ' ',
    //如果可能，应使用前置或后置递增和递减运算符
    'increment_style'                                  => ' ',
    //使用&&和||逻辑运算符代替and和or
    'logical_operators'                                => ' ',
    //使用 new 关键字创建的所有实例必须后跟大括号
    'new_with_braces'                                  => ' ',
    //逻辑 NOT 运算符 ( !) 应该有前导和尾随空格
    'not_operator_with_space'                          => ' ',
    //逻辑非运算符 ( !) 应该有一个尾随空格
    'not_operator_with_successor_space'                => ' ',
    //对象运算符->and前后不应有空格
    'object_operator_without_whitespace'               => ' ',
    //运算符 - 当多行时 - 必须始终位于行的开头或结尾
    'operator_linebreak'                               => ' ',
    //如果可能，应使用递增和递减运算符
    'standardize_increment'                            => ' ',
    //全部替换<>为!=
    'standardize_not_equals'                           => ' ',
    //标准化三元运算符周围的空格
    'ternary_operator_spaces'                          => ' ',
    //?:尽可能使用 Elvis 运算符
    'ternary_to_elvis_operator'                        => ' ',
    //尽可能使用null合并运算符??。需要 PHP >= 7.0
    'ternary_to_null_coalescing'                       => ' ',
    //一元运算符应放置在其操作数旁边
    'unary_operator_spaces'                            => ' ',
    /*-----------------------------------------------------php_tag-----------------------------------------------------*/
    //确保与 PHP 开放标记在同一行上没有代码，并且后面跟着一个空行
    'blank_line_after_opening_tag'                     => ' ',
    //<?=用长格式<?php echo/<?php print语法替换短回声，反之亦然
    'echo_tag_syntax'                                  => ' ',
    //PHP 代码必须使用长<?php标签或短回显<?=标签，而不是其他标签变体
    'full_opening_tag'                                 => ' ',
    //确保与 PHP 打开标记在同一行上没有代码
    'linebreak_after_opening_tag'                      => ' ',
    //结束'? >'标记必须从只包含 PHP 的文件中省略
    'no_closing_tag'                                   => ' ',
    /*----------------------------------------------------php_unit----------------------------------------------------*/
    //PHPUnit 断言方法调用（->assertSame(true, $foo)如->assertTrue($foo)
    'php_unit_construct'                               => ' ',
    //PHPUnit 断言如assertInternalType, assertFileExists, 应该使用 over assertTrue
    'php_unit_dedicate_assert'                         => ' ',
    //PHPUnit 断言之类的assertIsArray应该用于assertInternalType
    'php_unit_dedicate_assert_internal_type'           => ' ',
    //用法->setExpectedException*方法必须被替换->expectException*的方法
    'php_unit_expectation'                             => ' ',
    //PHPUnit 注释应该是包含根命名空间的 FQCN
    'php_unit_fqcn_annotation'                         => ' ',
    //所有 PHPUnit 测试类都应标记为内部
    'php_unit_internal_class'                          => ' ',
    //按照配置对 PHPUnit 测试方法强制执行骆驼（或蛇）案例
    'php_unit_method_casing'                           => ' ',
    //->getMock和->getMockWithoutInvokingTheOriginalConstructor方法的用法必须被->createMock或->createPartialMock方法替换
    'php_unit_mock'                                    => ' ',
    //使用 PHPUnit 的模拟 eg->will($this->returnValue(..))必须替换为其较短的等效项，例如->willReturn(...)
    'php_unit_mock_short_will_return'                  => ' ',
    //PHPUnit 类必须在命名空间版本中使用，例如\PHPUnit\Framework\TestCase代替\PHPUnit_Framework_TestCase
    'php_unit_namespaced'                              => ' ',
    //用法@expectedException*说明必须被替换->setExpectedException*的方法
    'php_unit_no_expectation_annotation'               => ' ',
    //将PHPUnit的setUp()和tearDown()函数的可见性更改为protected，以匹配 PHPUnit TestCase
    'php_unit_set_up_tear_down_visibility'             => ' ',
    //所有 PHPUnit 测试用例都应该有@small,@medium或@large注释以启用运行时间限制
    'php_unit_size_class'                              => ' ',
    //assertSame应该使用PHPUnit 之类的方法而不是assertEquals
    'php_unit_strict'                                  => ' ',
    //按照配置从测试中添加或删除 @test 注释
    'php_unit_test_annotation'                         => ' ',
    //对PHPUnit\Framework\TestCase静态方法的调用都必须是相同的类型，要么是$this->，self::要么是static::
    'php_unit_test_case_static_method_calls'           => ' ',
    //@coversNothing向没有@covers*注释的PHPUnit 测试类添加默认注释
    'php_unit_test_class_requires_covers'              => ' ',
    /*-----------------------------------------------------phpdoc-----------------------------------------------------*/
    //多行 DocComments 的每一行都必须有一个星号 [PSR-5]，并且必须与第一行对齐。
    'align_multiline_comment'                          => ' ',
    //PHPDoc 中应省略已配置的注释
    'general_phpdoc_annotation_remove'                 => ' ',
    //重命名 PHPDoc 标签
    'general_phpdoc_tag_rename'                        => ' ',
    //文档块和文档元素之间不应有空行
    'no_blank_lines_after_phpdoc'                      => ' ',
    //不应有空的 PHPDoc 块
    'no_empty_phpdoc'                                  => ' ',
    //删除@param,@return和@var不提供任何有用信息的标签
    'no_superfluous_phpdoc_tags'                       => ' ',
    //PHPDoc 应该包含@param所有参数
    'phpdoc_add_missing_param_annotation'              => ' ',
    //给定 phpdoc 标签的所有项目必须左对齐或（默认情况下）垂直对齐
    'phpdoc_align'                                     => ' ',
    //PHPDoc 注释说明不应是一个句子
    'phpdoc_annotation_without_dot'                    => ' ',
    //Docblocks 应该与记录的主题具有相同的缩进
    'phpdoc_indent'                                    => ' ',
    //修复 PHPDoc 内联标签
    'phpdoc_inline_tag_normalizer'                     => ' ',
    //将文档块从单行更改为多行，或反转。仅适用于类常量、属性和方法
    'phpdoc_line_span'                                 => ' ',
    //@access PHPDoc 中应该省略注释
    'phpdoc_no_access'                                 => ' ',
    //不应使用别名 PHPDoc 标签
    'phpdoc_no_alias_tag'                              => ' ',
    //@return void和@return null注释应该从 PHPDoc 中省略
    'phpdoc_no_empty_return'                           => ' ',
    //@package和@subpackage注释应该从 PHPDoc 中省略
    'phpdoc_no_package'                                => ' ',
    //不继承的优雅不能有@inheritdoc标签
    'phpdoc_no_useless_inheritdoc'                     => ' ',
    //按值排序 phpdoc 标签
    'phpdoc_order_by_value'                            => ' ',
    //PHPDoc 中的注释应该排序，以便@param先@throws注释，然后是@return注释，然后是注释
    'phpdoc_order'                                     => ' ',
    //@return返回对自身的引用的方法的注释类型必须是配置的类型
    'phpdoc_return_self_reference'                     => ' ',
    //标量类型应始终以相同的形式编写。int不integer，bool不boolean，float不real或double
    'phpdoc_scalar'                                    => ' ',
    //PHPDoc 中的注解应该组合在一起，以便相同类型的注解紧随其后，不同类型的注解由一个空行分隔
    'phpdoc_separation'                                => ' ',
    //单行@varPHPDoc 应该有适当的间距
    'phpdoc_single_line_var_spacing'                   => ' ',
    //PHPDoc 摘要应以句号、感叹号或问号结尾
    'phpdoc_summary'                                   => ' ',
    //修复 PHPDoc 标签的大小写
    'phpdoc_tag_casing'                                => ' ',
    //强制 PHPDoc 标记为常规注释或内联
    'phpdoc_tag_type'                                  => ' ',
    //Docblocks 应该只用于结构元素
    'phpdoc_to_comment'                                => ' ',
    //在 PHPDoc 中的摘要和描述之后删除额外的空行
    'phpdoc_trim_consecutive_blank_line_separation'    => ' ',
    //PHPDoc 应该以内容开始和结束，不包括文档块的第一行和最后一行
    'phpdoc_trim'                                      => ' ',
    //PHPDoc 中的标准 PHP 类型必须使用正确的大小写
    'phpdoc_types'                                     => ' ',
    //对 PHPDoc 类型进行排序
    'phpdoc_types_order'                               => ' ',
    //@var并且@type注释必须按正确的顺序具有类型和名称
    'phpdoc_var_annotation_correct_order'              => ' ',
    //@var与@type优雅特性的注释不应该包含名称
    'phpdoc_var_without_name'                          => ' ',
    /*-------------------------------------------------return_notation-------------------------------------------------*/
    //return函数末尾不应有空语句
    'no_useless_return'                                => ' ',
    //函数或方法不应分配和直接返回局部、动态和直接引用的变量
    'return_assignment'                                => ' ',
    //希望返回的 return 语句void不应 return null
    'simplified_null_return'                           => ' ',
    /*----------------------------------------------------semicolon----------------------------------------------------*/
    //在结束分号之前禁止多行空格或将分号移动到新行以进行链式调用
    'multiline_whitespace_before_semicolons'           => ' ',
    //删除无用的（分号）语句。
    'no_empty_statement'                               => ' ',
    //禁止结束分号前的单行空格
    'no_singleline_whitespace_before_semicolons'       => ' ',
    //指令必须以分号结束
    'semicolon_after_instruction'                      => ' ',
    //修复分号后的空格
    'space_after_semicolon'                            => ' ',
    /*-----------------------------------------------------strict-----------------------------------------------------*/
    //在所有文件中强制进行严格类型声明。需要 PHP >= 7.0
    'declare_strict_types'                             => ' ',
    //比较应该是严格的
    'strict_comparison'                                => ' ',
    //可设置严格模式的函数补充使用true
    'strict_param'                                     => ' ',
    /*-------------------------------------------------strict_notation-------------------------------------------------*/
    //义字符串和heredocs 中的隐式反斜杠，以便于理解哪些是PHP 解释的特殊字符，哪些不是
    'escape_implicit_backslashes'                      => ' ',
    //将隐式变量转换为双引号字符串或heredoc 语法中的显式变量
    'explicit_string_variable'                         => ' ',
    //尽可能转换heredoc为nowdoc
    'heredoc_to_nowdoc'                                => ' ',
    //字符串前不应有二进制标志
    'no_binary_string'                                 => ' ',
    //字符串中不能有尾随空格
    'no_trailing_whitespace_in_string'                 => ' ',
    //将双引号字符串和 heredoc 语法中的显式变量从简单格式转换为复杂格式 ( ${to {$)
    'simple_to_complex_string_variable'                => ' ',
    //将简单字符串的双引号转换为单引号
    'single_quote'                                     => ' ',
    //所有多行字符串必须使用正确的行尾
    'string_line_ending'                               => ' ',
    /*---------------------------------------------------whitespace---------------------------------------------------*/
    //数组的每个元素必须精确缩进一次
    'array_indentation'                                => ' ',
    //任何配置的语句之前必须有一个空的换行符
    'blank_line_before_statement'                      => ' ',
    //删除可为空类型提示中的额外空格
    'compact_nullable_typehint'                        => ' ',
    //Heredoc/nowdoc 内容必须正确缩进。需要 PHP >= 7.3
    'heredoc_indentation'                              => ' ',
    //代码必须使用配置的缩进类型
    'indentation_type'                                 => ' ',
    //所有 PHP 文件必须使用相同的行结尾
    'line_ending'                                      => ' ',
    //方法链必须正确缩进。不支持具有不同缩进级别的方法链
    'method_chaining_indentation'                      => ' ',
    //在配置之后删除额外的空行和/或空行
    'no_extra_blank_lines'                             => ' ',
    //偏移大括号周围不得有空格
    'no_spaces_around_offset'                          => ' ',
    //左括号后不能有空格。右括号前不能有空格
    'no_spaces_inside_parenthesis'                     => ' ',
    //删除非空行末尾的尾随空格
    'no_trailing_whitespace'                           => ' ',
    //删除空行末尾的尾随空格
    'no_whitespace_in_blank_line'                      => ' ',
    //没有结束标记的 PHP 文件必须始终以单个空换行符结尾
    'single_blank_line_at_eof'                         => ' ',
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
