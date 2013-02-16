<?php

// autoload_classmap.php generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'AddUserIdToPostsTable' => $baseDir . '/app/database/migrations/2013_02_14_145647_add_user_id_to_posts_table.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'CreateDiscussionsTable' => $baseDir . '/app/database/migrations/2013_01_29_121630_create_discussions_table.php',
    'CreateGroupUserTable' => $baseDir . '/app/database/migrations/2013_01_19_114342_create_group_user_table.php',
    'CreateGroupsTable' => $baseDir . '/app/database/migrations/2013_01_18_155523_create_groups_table.php',
    'CreatePostsTable' => $baseDir . '/app/database/migrations/2013_02_14_102034_create_posts_table.php',
    'CreateUsersTable' => $baseDir . '/app/database/migrations/2013_01_17_131514_create_users_table.php',
    'Discussion' => $baseDir . '/app/models/Discussion.php',
    'DiscussionsController' => $baseDir . '/app/controllers/DiscussionsController.php',
    'Group' => $baseDir . '/app/models/Group.php',
    'GroupsController' => $baseDir . '/app/controllers/GroupsController.php',
    'HomeController' => $baseDir . '/app/controllers/HomeController.php',
    'Pheanstalk' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk.php',
    'Pheanstalk_ClassLoader' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/ClassLoader.php',
    'Pheanstalk_Command' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command.php',
    'Pheanstalk_Command_AbstractCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/AbstractCommand.php',
    'Pheanstalk_Command_BuryCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/BuryCommand.php',
    'Pheanstalk_Command_DeleteCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/DeleteCommand.php',
    'Pheanstalk_Command_IgnoreCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/IgnoreCommand.php',
    'Pheanstalk_Command_KickCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/KickCommand.php',
    'Pheanstalk_Command_ListTubeUsedCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/ListTubeUsedCommand.php',
    'Pheanstalk_Command_ListTubesCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/ListTubesCommand.php',
    'Pheanstalk_Command_ListTubesWatchedCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/ListTubesWatchedCommand.php',
    'Pheanstalk_Command_PauseTubeCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/PauseTubeCommand.php',
    'Pheanstalk_Command_PeekCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/PeekCommand.php',
    'Pheanstalk_Command_PutCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/PutCommand.php',
    'Pheanstalk_Command_ReleaseCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/ReleaseCommand.php',
    'Pheanstalk_Command_ReserveCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/ReserveCommand.php',
    'Pheanstalk_Command_StatsCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/StatsCommand.php',
    'Pheanstalk_Command_StatsJobCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/StatsJobCommand.php',
    'Pheanstalk_Command_StatsTubeCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/StatsTubeCommand.php',
    'Pheanstalk_Command_TouchCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/TouchCommand.php',
    'Pheanstalk_Command_UseCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/UseCommand.php',
    'Pheanstalk_Command_WatchCommand' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Command/WatchCommand.php',
    'Pheanstalk_Connection' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Connection.php',
    'Pheanstalk_Exception' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Exception.php',
    'Pheanstalk_Exception_ClientException' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Exception/ClientException.php',
    'Pheanstalk_Exception_CommandException' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Exception/CommandException.php',
    'Pheanstalk_Exception_ConnectionException' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Exception/ConnectionException.php',
    'Pheanstalk_Exception_ServerBadFormatException' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Exception/ServerBadFormatException.php',
    'Pheanstalk_Exception_ServerDrainingException' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Exception/ServerDrainingException.php',
    'Pheanstalk_Exception_ServerException' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Exception/ServerException.php',
    'Pheanstalk_Exception_ServerInternalErrorException' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Exception/ServerInternalErrorException.php',
    'Pheanstalk_Exception_ServerOutOfMemoryException' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Exception/ServerOutOfMemoryException.php',
    'Pheanstalk_Exception_ServerUnknownCommandException' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Exception/ServerUnknownCommandException.php',
    'Pheanstalk_Exception_SocketException' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Exception/SocketException.php',
    'Pheanstalk_Job' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Job.php',
    'Pheanstalk_Response' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Response.php',
    'Pheanstalk_ResponseParser' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/ResponseParser.php',
    'Pheanstalk_Response_ArrayResponse' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Response/ArrayResponse.php',
    'Pheanstalk_Socket' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Socket.php',
    'Pheanstalk_Socket_NativeSocket' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Socket/NativeSocket.php',
    'Pheanstalk_Socket_StreamFunctions' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Socket/StreamFunctions.php',
    'Pheanstalk_Socket_WriteHistory' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/Socket/WriteHistory.php',
    'Pheanstalk_YamlResponseParser' => $baseDir . '/vendor/laravel/framework/src/Illuminate/Queue/Pheanstalk/Pheanstalk/YamlResponseParser.php',
    'Post' => $baseDir . '/app/models/Post.php',
    'PostsController' => $baseDir . '/app/controllers/PostsController.php',
    'SessionController' => $baseDir . '/app/controllers/SessionController.php',
    'SessionHandlerInterface' => $baseDir . '/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'User' => $baseDir . '/app/models/User.php',
    'UsersController' => $baseDir . '/app/controllers/UsersController.php',
);
