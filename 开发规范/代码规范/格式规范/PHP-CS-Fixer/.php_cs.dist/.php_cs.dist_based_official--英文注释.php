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
    //Converts simple usages of array_push($x, $y); to $x[] = $y
    'array_push'                                       => ' ',
    //Converts backtick operators to shell_exec calls
    'backtick_to_shell_exec'                           => ' ',
    //Replace deprecated ereg regular expression functions with preg
    'ereg_to_preg'                                     => ' ',
    //Replace non multibyte-safe functions with corresponding mb function
    'mb_str_functions'                                 => ' ',
    //Master functions shall be used instead of aliases
    'no_alias_functions'                               => ' ',
    //Master language constructs shall be used instead of aliases
    'no_alias_language_construct_call'                 => ' ',
    //Either language construct print or echo should be used
    'no_mixed_echo_print'                              => ' ',
    //Converts pow to the ** operator
    'pow_to_exponentiation'                            => ' ',
    //Replaces rand, srand, getrandmax functions calls with their ``mt*`` analogs
    'random_api_migration'                             => ' ',
    //Cast shall be used, not settype
    'set_type_to_cast'                                 => ' ',
    /*-------------------------------------------------array_notation-------------------------------------------------*/
    //PHP arrays should be declared using the configured syntax
    //PHP 数组应使用配置的语法进行声明
    'array_syntax'                                     => ' ',
    //Operator => should not be surrounded by multi-line whitespaces
    'no_multiline_whitespace_around_double_arrow'      => ' ',
    //PHP single-line arrays should not have trailing comma
    'no_trailing_comma_in_singleline_array'            => ' ',
    //In array declaration, there MUST NOT be a whitespace before each comma
    'no_whitespace_before_comma_in_array'              => ' ',
    //Array index should always be written by using square braces
    'normalize_index_brace'                            => ' ',
    //Arrays should be formatted like function/method arguments, without leading or trailing single line space
    'trim_array_spaces'                                => ' ',
    //In array declaration, there MUST be a whitespace after each comma
    'whitespace_after_comma_in_array'                  => ' ',
    /*------------------------------------------------------basic------------------------------------------------------*/
    //The body of each structure MUST be enclosed by braces. Braces should be properly placed. Body of braces should be properly indented
    'braces'                                           => ' ',
    //PHP code MUST use only UTF-8 without BOM (remove BOM)
    'encoding'                                         => ' ',
    //Remove Zero-width space (ZWSP), Non-breaking space (NBSP) and other invisible unicode symbols
    'non_printable_character'                          => ' ',
    //Remove Zero-width space (ZWSP), Non-breaking space (NBSP) and other invisible unicode symbols
    'psr_autoloading'                                  => ' ',
    /*-----------------------------------------------------casing-----------------------------------------------------*/
    //The PHP constants true, false, and null MUST be written using the correct casing
    'constant_case'                                    => ' ',
    //PHP keywords MUST be in lower case
    'lowercase_keywords'                               => ' ',
    //Class static references self, static and parent MUST be in lower case
    'lowercase_static_reference'                       => ' ',
    //Magic constants should be referred to using the correct casing
    'magic_constant_casing'                            => ' ',
    //Magic method definitions and calls must be using the correct casing
    'magic_method_casing'                              => ' ',
    //Function defined by PHP should be called using the correct casing
    'native_function_casing'                           => ' ',
    //Native type hints for functions should use the correct case
    'native_function_type_declaration_casing'          => ' ',
    /*--------------------------------------------------cast_notation--------------------------------------------------*/
    //A single space or none should be between cast and variable
    'cast_spaces'                                      => ' ',
    //Cast should be written in lower case
    'lowercase_cast'                                   => ' ',
    //Replaces intval, floatval, doubleval, strval and boolval function calls with according type casting operator
    'modernize_types_casting'                          => ' ',
    //Short cast bool using double exclamation mark should not be used
    'no_short_bool_cast'                               => ' ',
    //Variables must be set null instead of using (unset) casting
    'no_unset_cast'                                    => ' ',
    //Cast (boolean) and (integer) should be written as (bool) and (int), (double) and (real) as (float), (binary) as (string)
    'short_scalar_cast'                                => ' ',
    /*-------------------------------------------------class_notation-------------------------------------------------*/
    //Class, trait and interface elements must be separated with one or none blank line
    'class_attributes_separation'                      => ' ',
    //Whitespace around the keywords of a class, trait or interfaces definition should be one space
    'class_definition'                                 => ' ',
    //All classes must be final, except abstract ones and Doctrine entities
    'final_class'                                      => ' ',
    //Internal classes should be final
    'final_internal_class'                             => ' ',
    //All public methods of abstract classes should be final
    'final_public_method_for_abstract_class'           => ' ',
    //There should be no empty lines after class opening brace
    'no_blank_lines_after_class_opening'               => ' ',
    //Properties MUST not be explicitly initialized with null except when they have a type declaration (PHP 7.4)
    'no_null_property_initialization'                  => ' ',
    //Convert PHP4-style constructors to __construct
    'no_php4_constructor'                              => ' ',
    //A final class must not have final methods and private methods must not be final
    'no_unneeded_final_method'                         => ' ',
    //Orders the elements of classes/interfaces/traits
    'ordered_class_elements'                           => ' ',
    //Orders the interfaces in an implements or interface extends clause
    'ordered_interfaces'                               => ' ',
    //Trait use statements must be sorted alphabetically
    'ordered_traits'                                   => ' ',
    //Converts protected variables and methods to private where possible
    'protected_to_private'                             => ' ',
    //Inside class or interface element self should be preferred to the class name itself
    'self_accessor'                                    => ' ',
    //Inside a final class or anonymous class self should be preferred to static
    'self_static_accessor'                             => ' ',
    //There MUST NOT be more than one property or constant declared per statement
    'single_class_element_per_statement'               => ' ',
    //Each trait use must be done as single statement
    'single_trait_insert_per_statement'                => ' ',
    //Visibility MUST be declared on all properties and methods; abstract and final MUST be declared before the visibility; static MUST be declared after the visibility
    'visibility_required'                              => ' ',
    /*---------------------------------------------------class_usage---------------------------------------------------*/
    //Class DateTimeImmutable should be used instead of DateTime
    'date_time_immutable'                              => ' ',
    /*-----------------------------------------------------comment-----------------------------------------------------*/
    //Comments with annotation should be docblock when used on structural elements
    'comment_to_phpdoc'                                => ' ',
    //Add, replace or remove header comment
    'header_comment'                                   => ' ',
    //DocBlocks must start with two asterisks, multiline comments must start with a single asterisk, after the opening slash. Both must end with a single asterisk before the closing slash
    'multiline_comment_opening_closing'                => ' ',
    //There should not be any empty comments
    'no_empty_comment'                                 => ' ',
    //There MUST be no trailing spaces inside comment or PHPDoc
    'no_trailing_whitespace_in_comment'                => ' ',
    //Single-line comments and multi-line comments with only one line of actual content should use the // syntax
    'single_line_comment_style'                        => ' ',
    /*------------------------------------------------constant_notation------------------------------------------------*/
    //Add leading \ before constant invocation of internal constant to speed up resolving. Constant name match is case-sensitive, except for null, false and true
    'native_constant_invocation'                       => ' ',
    /*------------------------------------------------control_structure------------------------------------------------*/
    //The keyword elseif should be used instead of else if so that all control keywords look like single words
    'elseif'                                           => ' ',
    //Include/Require and file path should be divided with a single space. File path should not be placed under brackets
    'include'                                          => ' ',
    //Replace control structure alternative syntax to use braces
    'no_alternative_syntax'                            => ' ',
    //There must be a comment when fall-through is intentional in a non-empty case body
    'no_break_comment'                                 => ' ',
    //Replaces superfluous elseif with if
    'no_superfluous_elseif'                            => ' ',
    //Remove trailing commas in list function calls
    'no_trailing_comma_in_list_call'                   => ' ',
    //Removes unneeded parentheses around control statements
    'no_unneeded_control_parentheses'                  => ' ',
    //Removes unneeded curly braces that are superfluous and aren’t part of a control structure’s body
    'no_unneeded_curly_braces'                         => ' ',
    //There should not be useless else cases
    'no_useless_else'                                  => ' ',
    //Simplify if control structures that return the boolean result of their condition
    'simplified_if_return'                             => ' ',
    //A case should be followed by a colon and not a semicolon
    'switch_case_semicolon_to_colon'                   => ' ',
    //Removes extra spaces between colon and case value
    'switch_case_space'                                => ' ',
    //Switch case must not be ended with continue but with break
    'switch_continue_to_break'                         => ' ',
    //Multi-line arrays, arguments list and parameters list must have a trailing comma
    'trailing_comma_in_multiline'                      => ' ',
    //Write conditions in Yoda style (true), non-Yoda style (['equal' => false, 'identical' => false, 'less_and_greater' => false]) or ignore those conditions (null) based on configuration
    'yoda_style'                                       => ' ',
    /*-----------------------------------------------doctrine_annotation-----------------------------------------------*/
    //Doctrine annotations must use configured operator for assignment in arrays
    'doctrine_annotation_array_assignment'             => ' ',
    //Doctrine annotations without arguments must use the configured syntax
    'doctrine_annotation_braces'                       => ' ',
    //Doctrine annotations must be indented with four spaces
    'doctrine_annotation_indentation'                  => ' ',
    //Fixes spaces in Doctrine annotations
    'doctrine_annotation_spaces'                       => ' ',
    /*------------------------------------------------function_notation------------------------------------------------*/
    //Replace multiple nested calls of dirname by only one call with second $level parameter. Requires PHP >= 7.0
    'combine_nested_dirname'                           => ' ',
    //Order the flags in fopen calls, b and t must be last
    'fopen_flag_order'                                 => ' ',
    //The flags in fopen calls must omit t, and b must be omitted or included consistently
    'fopen_flags'                                      => ' ',
    //Spaces should be properly placed in a function declaration
    'function_declaration'                             => ' ',
    //Ensure single space between function’s argument and its typehint
    'function_typehint_space'                          => ' ',
    //Function implode must be called with 2 arguments in the documented order
    'implode_call'                                     => ' ',
    //Lambda must not import variables it doesn’t use
    'lambda_not_used_import'                           => ' ',
    //In method arguments and method call, there MUST NOT be a space before each comma and there MUST be one space after each comma. Argument lists MAY be split across multiple lines, where each subsequent line is indented once. When doing so, the first item in the list MUST be on the next line, and there MUST be only one argument per line
    'method_argument_space'                            => ' ',
    //Add leading \ before function invocation to speed up resolving
    'native_function_invocation'                       => ' ',
    //When making a method or function call, there MUST NOT be a space between the method or function name and the opening parenthesis
    'no_spaces_after_function_name'                    => ' ',
    //In function arguments there must not be arguments with default values before non-default ones
    'no_unreachable_default_argument_value'            => ' ',
    //There must be no sprintf calls with only the first argument
    'no_useless_sprintf'                               => ' ',
    //Adds or removes ? before type declarations for parameters with a default null value
    'nullable_type_declaration_for_default_null_value' => ' ',
    //EXPERIMENTAL: Takes @param annotations of non-mixed types and adjusts accordingly the function signature. Requires PHP >= 7.0
    'phpdoc_to_param_type'                             => ' ',
    //EXPERIMENTAL: Takes @var annotation of non-mixed types and adjusts accordingly the property signature. Requires PHP >= 7.4
    'phpdoc_to_property_type'                          => ' ',
    //EXPERIMENTAL: Takes @return annotation of non-mixed types and adjusts accordingly the function signature. Requires PHP >= 7.0
    'phpdoc_to_return_type'                            => ' ',
    //Callables must be called without using call_user_func* when possible
    'regular_callable_call'                            => ' ',
    //There should be one or no space before colon, and one space after it in return type declarations, according to configuration
    'return_type_declaration'                          => ' ',
    //Throwing exception must be done in single line
    'single_line_throw'                                => ' ',
    //Lambdas not (indirect) referencing $this must be declared static
    'static_lambda'                                    => ' ',
    //Anonymous functions with one-liner return statement must use arrow functions
    'use_arrow_functions'                              => ' ',
    //Add void return type to functions with missing or empty return statements, but priority is given to @return annotations. Requires PHP >= 7.1
    'void_return'                                      => ' ',
    /*-----------------------------------------------------import-----------------------------------------------------*/
    //Transforms imported FQCN parameters and return types in function arguments to short version
    'fully_qualified_strict_types'                     => ' ',
    //Imports or fully qualifies global classes/functions/constants
    'global_namespace_import'                          => ' ',
    //There MUST be group use for the same namespaces
    'group_import'                                     => ' ',
    //Remove leading slashes in use clauses
    'no_leading_import_slash'                          => ' ',
    //Unused use statements must be removed
    'no_unused_imports'                                => ' ',
    //Ordering use statements
    'ordered_imports'                                  => ' ',
    //There MUST be one use keyword per declaration
    'single_import_per_statement'                      => ' ',
    //Each namespace use MUST go on its own line and there MUST be one blank line after the use statements block
    'single_line_after_imports'                        => ' ',
    /*------------------------------------------------language_construct------------------------------------------------*/
    //Converts ::class keywords to FQCN strings
    'class_keyword_remove'                             => ' ',
    //Using isset($var) && multiple times should be done in one call
    'combine_consecutive_issets'                       => ' ',
    //Calling unset on multiple items should be done in one call
    'combine_consecutive_unsets'                       => ' ',
    //Equal sign in declare statement should be surrounded by spaces or not following configuration
    'declare_equal_normalize'                          => ' ',
    //Replaces dirname(__FILE__) expression with equivalent ``_DIR`` constant
    'dir_constant'                                     => ' ',
    //Error control operator should be added to deprecation notices and/or removed from other cases
    'error_suppression'                                => ' ',
    //Add curly braces to indirect variables to make them clear to understand. Requires PHP >= 7.0
    'explicit_indirect_variable'                       => ' ',
    //Replace core functions calls returning constants with the constants
    'function_to_constant'                             => ' ',
    //Replaces is_null($var) expression with null === $var
    'is_null'                                          => ' ',
    //Properties should be set to null instead of using unset
    'no_unset_on_property'                             => ' ',
    //Ensures a single space after language constructs
    'single_space_after_construct'                     => ' ',
    /*--------------------------------------------------list_notation--------------------------------------------------*/
    //List (array destructuring) assignment should be declared using the configured syntax. Requires PHP >= 7.1
    'list_syntax'                                      => ' ',
    /*-----------------------------------------------namespace_notation-----------------------------------------------*/
    //There MUST be one blank line after the namespace declaration
    'blank_line_after_namespace'                       => ' ',
    //Namespace must not contain spacing, comments or PHPDoc
    'clean_namespace'                                  => ' ',
    //There should be no blank lines before a namespace declaration
    'no_blank_lines_before_namespace'                  => ' ',
    //The namespace declaration line shouldn’t contain leading whitespace
    'no_leading_namespace_whitespace'                  => ' ',
    //There should be exactly one blank line before a namespace declaration
    'single_blank_line_before_namespace'               => ' ',
    /*-----------------------------------------------------naming-----------------------------------------------------*/
    //Replace accidental usage of homoglyphs (non ascii characters) in names
    //替换名称中偶然使用的同形文字（非 ascii 字符
    'no_homoglyph_names'                               => ' ',
    /*----------------------------------------------------operator----------------------------------------------------*/
    //Binary operators should be surrounded by space as configured
    'binary_operator_spaces'                           => ' ',
    //Concatenation should be spaced according configuration
    'concat_space'                                     => ' ',
    //Pre- or post-increment and decrement operators should be used if possible
    'increment_style'                                  => ' ',
    //Use && and || logical operators instead of and and or
    'logical_operators'                                => ' ',
    //All instances created with new keyword must be followed by braces
    'new_with_braces'                                  => ' ',
    //Logical NOT operators (!) should have leading and trailing whitespaces
    'not_operator_with_space'                          => ' ',
    //Logical NOT operators (!) should have one trailing whitespace
    'not_operator_with_successor_space'                => ' ',
    //There should not be space before or after object operators -> and
    'object_operator_without_whitespace'               => ' ',
    //Operators - when multiline - must always be at the beginning or at the end of the line
    'operator_linebreak'                               => ' ',
    //Increment and decrement operators should be used if possible
    'standardize_increment'                            => ' ',
    //Replace all <> with !=
    'standardize_not_equals'                           => ' ',
    //Standardize spaces around ternary operator
    'ternary_operator_spaces'                          => ' ',
    //Use the Elvis operator ?: where possible
    'ternary_to_elvis_operator'                        => ' ',
    //Use null coalescing operator ?? where possible. Requires PHP >= 7.0
    'ternary_to_null_coalescing'                       => ' ',
    //Unary operators should be placed adjacent to their operands
    'unary_operator_spaces'                            => ' ',
    /*-----------------------------------------------------php_tag-----------------------------------------------------*/
    //Ensure there is no code on the same line as the PHP open tag and it is followed by a blank line
    'blank_line_after_opening_tag'                     => ' ',
    //Replaces short-echo <?= with long format <?php echo/<?php print syntax, or vice-versa
    'echo_tag_syntax'                                  => ' ',
    //PHP code must use the long <?php tags or short-echo <?= tags and not other tag variations
    'full_opening_tag'                                 => ' ',
    //Ensure there is no code on the same line as the PHP open tag.
    'linebreak_after_opening_tag'                      => ' ',
    //The closing ? > tag MUST be omitted from files containing only PHP
    'no_closing_tag'                                   => ' ',
    /*----------------------------------------------------php_unit----------------------------------------------------*/
    //PHPUnit assertion method calls like ->assertSame(true, $foo) should be written with dedicated method like ->assertTrue($foo)
    'php_unit_construct'                               => ' ',
    //PHPUnit assertions like assertInternalType, assertFileExists, should be used over assertTrue
    'php_unit_dedicate_assert'                         => ' ',
    //PHPUnit assertions like assertIsArray should be used over assertInternalType
    'php_unit_dedicate_assert_internal_type'           => ' ',
    //Usages of ->setExpectedException* methods MUST be replaced by ->expectException* methods
    'php_unit_expectation'                             => ' ',
    //PHPUnit annotations should be a FQCNs including a root namespace
    'php_unit_fqcn_annotation'                         => ' ',
    //All PHPUnit test classes should be marked as internal
    'php_unit_internal_class'                          => ' ',
    //Enforce camel (or snake) case for PHPUnit test methods, following configuration
    'php_unit_method_casing'                           => ' ',
    //Usages of ->getMock and ->getMockWithoutInvokingTheOriginalConstructor methods MUST be replaced by ->createMock or ->createPartialMock methods
    'php_unit_mock'                                    => ' ',
    //Usage of PHPUnit’s mock e.g. ->will($this->returnValue(..)) must be replaced by its shorter equivalent such as ->willReturn
    'php_unit_mock_short_will_return'                  => ' ',
    //PHPUnit classes MUST be used in namespaced version, e.g. \PHPUnit\Framework\TestCase instead of \PHPUnit_Framework_TestCase
    'php_unit_namespaced'                              => ' ',
    //Usages of @expectedException* annotations MUST be replaced by ->setExpectedException* methods
    'php_unit_no_expectation_annotation'               => ' ',
    //Changes the visibility of the setUp() and tearDown() functions of PHPUnit to protected, to match the PHPUnit TestCase
    'php_unit_set_up_tear_down_visibility'             => ' ',
    //All PHPUnit test cases should have @small, @medium or @large annotation to enable run time limits
    'php_unit_size_class'                              => ' ',
    //PHPUnit methods like assertSame should be used instead of assertEquals
    'php_unit_strict'                                  => ' ',
    //Adds or removes @test annotations from tests, following configuration
    'php_unit_test_annotation'                         => ' ',
    //Calls to PHPUnit\Framework\TestCase static methods must all be of the same type, either $this->
    'php_unit_test_case_static_method_calls'           => ' ',
    //Adds a default @coversNothing annotation to PHPUnit test classes that have no @covers* annotation
    'php_unit_test_class_requires_covers'              => ' ',
    /*-----------------------------------------------------phpdoc-----------------------------------------------------*/
    //Each line of multi-line DocComments must have an asterisk [PSR-5] and must be aligned with the first one
    'align_multiline_comment'                          => ' ',
    //Configured annotations should be omitted from PHPDoc
    'general_phpdoc_annotation_remove'                 => ' ',
    //Renames PHPDoc tags
    'general_phpdoc_tag_rename'                        => ' ',
    //There should not be blank lines between docblock and the documented element
    'no_blank_lines_after_phpdoc'                      => ' ',
    //There should not be empty PHPDoc blocks
    'no_empty_phpdoc'                                  => ' ',
    //emoves @param, @return and @var tags that don’t provide any useful information
    'no_superfluous_phpdoc_tags'                       => ' ',
    //PHPDoc should contain @param for all params
    'phpdoc_add_missing_param_annotation'              => ' ',
    //All items of the given phpdoc tags must be either left-aligned or (by default) aligned vertically
    'phpdoc_align'                                     => ' ',
    //PHPDoc annotation descriptions should not be a sentence
    'phpdoc_annotation_without_dot'                    => ' ',
    //Docblocks should have the same indentation as the documented subject
    'phpdoc_indent'                                    => ' ',
    //Fixes PHPDoc inline tags
    'phpdoc_inline_tag_normalizer'                     => ' ',
    //Changes doc blocks from single to multi line, or reversed. Works for class constants, properties and methods only
    'phpdoc_line_span'                                 => ' ',
    //@access annotations should be omitted from PHPDoc
    'phpdoc_no_access'                                 => ' ',
    //No alias PHPDoc tags should be used
    'phpdoc_no_alias_tag'                              => ' ',
    //@return void and @return null annotations should be omitted from PHPDoc
    'phpdoc_no_empty_return'                           => ' ',
    //@package and @subpackage annotations should be omitted from PHPDoc
    'phpdoc_no_package'                                => ' ',
    //Classy that does not inherit must not have @inheritdoc tags
    'phpdoc_no_useless_inheritdoc'                     => ' ',
    //Order phpdoc tags by value
    'phpdoc_order_by_value'                            => ' ',
    //Annotations in PHPDoc should be ordered so that @param annotations come first, then @throws annotations, then @return annotations
    'phpdoc_order'                                     => ' ',
    //The type of @return annotations of methods returning a reference to itself must the configured one
    'phpdoc_return_self_reference'                     => ' ',
    //Scalar types should always be written in the same form. int not integer, bool not boolean, float not real or double.
    'phpdoc_scalar'                                    => ' ',
    //Annotations in PHPDoc should be grouped together so that annotations of the same type immediately follow each other, and annotations of a different type are separated by a single blank line
    'phpdoc_separation'                                => ' ',
    //Single line @var PHPDoc should have proper spacing
    'phpdoc_single_line_var_spacing'                   => ' ',
    //PHPDoc summary should end in either a full stop, exclamation mark, or question mark
    'phpdoc_summary'                                   => ' ',
    //Fixes casing of PHPDoc tags
    'phpdoc_tag_casing'                                => ' ',
    //Forces PHPDoc tags to be either regular annotations or inline
    'phpdoc_tag_type'                                  => ' ',
    //Docblocks should only be used on structural elements
    'phpdoc_to_comment'                                => ' ',
    //Removes extra blank lines after summary and after description in PHPDoc
    'phpdoc_trim_consecutive_blank_line_separation'    => ' ',
    //PHPDoc should start and end with content, excluding the very first and last line of the docblocks
    'phpdoc_trim'                                      => ' ',
    //The correct case must be used for standard PHP types in PHPDoc
    'phpdoc_types'                                     => ' ',
    //Sorts PHPDoc types
    'phpdoc_types_order'                               => ' ',
    //@var and @type annotations must have type and name in the correct order
    'phpdoc_var_annotation_correct_order'              => ' ',
    //@var and @type annotations of classy properties should not contain the name
    'phpdoc_var_without_name'                          => ' ',
    /*-------------------------------------------------return_notation-------------------------------------------------*/
    //There should not be an empty return statement at the end of a function
    'no_useless_return'                                => ' ',
    //Local, dynamic and directly referenced variables should not be assigned and directly returned by a function or method
    'return_assignment'                                => ' ',
    //A return statement wishing to return void should not return null
    'simplified_null_return'                           => ' ',
    /*----------------------------------------------------semicolon----------------------------------------------------*/
    //Forbid multi-line whitespace before the closing semicolon or move the semicolon to the new line for chained calls
    'multiline_whitespace_before_semicolons'           => ' ',
    //Remove useless (semicolon) statements
    'no_empty_statement'                               => ' ',
    //Single-line whitespace before closing semicolon are prohibited
    'no_singleline_whitespace_before_semicolons'       => ' ',
    //Instructions must be terminated with a semicolon
    'semicolon_after_instruction'                      => ' ',
    //Fix whitespace after a semicolon
    'space_after_semicolon'                            => ' ',
    /*-----------------------------------------------------strict-----------------------------------------------------*/
    //Force strict types declaration in all files. Requires PHP >= 7.0
    'declare_strict_types'                             => ' ',
    //Comparisons should be strict
    'strict_comparison'                                => ' ',
    //Functions should be used with $strict param set to true
    'strict_param'                                     => ' ',
    /*-------------------------------------------------strict_notation-------------------------------------------------*/
    //Escape implicit backslashes in strings and heredocs to ease the understanding of which are special chars interpreted by PHP and which not
    'escape_implicit_backslashes'                      => ' ',
    //Converts implicit variables into explicit ones in double-quoted strings or heredoc syntax
    'explicit_string_variable'                         => ' ',
    //Convert heredoc to nowdoc where possible
    'heredoc_to_nowdoc'                                => ' ',
    //There should not be a binary flag before strings
    'no_binary_string'                                 => ' ',
    //There must be no trailing whitespace in strings
    'no_trailing_whitespace_in_string'                 => ' ',
    //Converts explicit variables in double-quoted strings and heredoc syntax from simple to complex format (${ to {$)
    'simple_to_complex_string_variable'                => ' ',
    //Convert double quotes to single quotes for simple strings
    'single_quote'                                     => ' ',
    //All multi-line strings must use correct line ending
    'string_line_ending'                               => ' ',
    /*---------------------------------------------------whitespace---------------------------------------------------*/
    //Each element of an array must be indented exactly once
    'array_indentation'                                => ' ',
    //An empty line feed must precede any configured statement
    'blank_line_before_statement'                      => ' ',
    //Remove extra spaces in a nullable typehint
    'compact_nullable_typehint'                        => ' ',
    //Heredoc/nowdoc content must be properly indented. Requires PHP >= 7.3
    'heredoc_indentation'                              => ' ',
    //Code MUST use configured indentation type
    'indentation_type'                                 => ' ',
    //All PHP files must use same line ending
    'line_ending'                                      => ' ',
    //Method chaining MUST be properly indented. Method chaining with different levels of indentation is not supported
    'method_chaining_indentation'                      => ' ',
    //Removes extra blank lines and/or blank lines following configuration
    'no_extra_blank_lines'                             => ' ',
    //There MUST NOT be spaces around offset braces
    'no_spaces_around_offset'                          => ' ',
    //There MUST NOT be a space after the opening parenthesis. There MUST NOT be a space before the closing parenthesis
    'no_spaces_inside_parenthesis'                     => ' ',
    //Remove trailing whitespace at the end of non-blank lines
    'no_trailing_whitespace'                           => ' ',
    //Remove trailing whitespace at the end of blank lines
    'no_whitespace_in_blank_line'                      => ' ',
    //A PHP file without end tag must always end with a single empty line feed
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
