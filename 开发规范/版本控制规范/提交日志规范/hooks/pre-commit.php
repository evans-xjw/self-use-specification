<?php
file_put_contents('test_git_hooks.txt', $argv ?json_encode($argv) : '测试钩子内容',FILE_APPEND);
