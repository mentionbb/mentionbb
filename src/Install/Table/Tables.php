<?php

namespace Install\Table;

use App\Db\Layer;
use App\Db\Native;

use Doctrine\DBAL\Schema\Table as TableSchema;

class Tables extends Layer
{
    private function getTables()
    {
        $tables = [];

        $tables['admin_navigations'] = function (TableSchema $table)
        {
            $table->addColumn('nav_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('name', 'varchar', [
                'length' => 50
            ]);
            $table->addColumn('link', 'varchar', [
                'length' => 50
            ]);
            $table->addColumn('parent_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('navigation_order', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('icon', 'varchar', [
                'length' => 50
            ]);

            return $table;
        };

        $tables['attachments'] = function (TableSchema $table)
        {
            $table->addColumn('attach_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('filename', 'text');
            $table->addColumn('unique_id', 'integer', [
                'length' => 36
            ]);
            $table->addColumn('post_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('user_id', 'integer', [
                'length' => 11
            ]);

            return $table;
        };

        $tables['attachment_filetypes'] = function (TableSchema $table)
        {
            $table->addColumn('type_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('extension', 'varchar', [
                'length' => 10
            ]);
            $table->addColumn('mime_type', 'varchar', [
                'length' => 100
            ]);
            $table->addColumn('icon', 'varchar', [
                'length' => 100
            ]);
            $table->addColumn('is_active', 'integer', [
                'length' => 1,
                'default' => 1
            ]);

            return $table;
        };

        $tables['bbmedias'] = function (TableSchema $table)
        {
            $table->addColumn('media_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('title', 'varchar', [
                'length' => 40
            ]);
            $table->addColumn('bb_key', 'varchar', [
                'length' => 35
            ]);
            $table->addColumn('matching_url', 'longtext');
            $table->addColumn('callback', 'varchar', [
                'length' => 150
            ]);
            $table->addColumn('is_active', 'integer', [
                'length' => 1,
                'default' => 1
            ]);

            return $table;
        };

        $tables['censored_words'] = function (TableSchema $table)
        {
            $table->addColumn('word_list', 'longtext');

            return $table;
        };

        $tables['discussions'] = function (TableSchema $table)
        {
            $table->addColumn('discussion_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('title', 'varchar', [
                'length' => 70
            ]);
            $table->addColumn('is_open', 'integer', [
                'length' => 1,
                'default' => 1
            ]);
            $table->addColumn('is_sticky', 'integer', [
                'length' => 1,
                'default' => 0
            ]);
            $table->addColumn('firstpost_id', 'integer', [
                'length' => 11,
                'default' => 0
            ]);
            $table->addColumn('forum_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('poll_id', 'integer', [
                'length' => 11,
                'default' => 0
            ]);
            $table->addColumn('integer', 'integer', [
                'length' => 1,
                'default' => 1
            ]);
            $table->addColumn('tags', 'text');

            return $table;
        };

        $tables['discussion_subscriptions'] = function (TableSchema $table)
        {
            $table->addColumn('subscription_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('user_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('discussion_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('dateline', 'integer', [
                'length' => 10
            ]);
        };

        $tables['discussion_views'] = function (TableSchema $table)
        {
            $table->addColumn('view_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('ip', 'varchar', [
                'length' => 50
            ]);
            $table->addColumn('discussion_id', 'integer', [
                'length' => 11
            ]);
        };

        $tables['editor_toolbars'] = function (TableSchema $table)
        {
            $table->addColumn('toolbar_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('toolbar', 'varchar', [
                'length' => 40
            ]);
            $table->addColumn('alias', 'varchar', [
                'length' => 40
            ]);
            $table->addColumn('button', 'varchar', [
                'length' => 30
            ]);
            $table->addColumn('icon', 'text');
            $table->addColumn('is_editable', 'integer', [
                'length' => 1,
                'default' => 0
            ]);
            $table->addColumn('order_by', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('is_active', 'integer', [
                'length' => 1,
                'default' => 1
            ]);
        };

        $tables['forums'] = function (TableSchema $table)
        {
            $table->addColumn('forum_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('parent_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('title', 'varchar', [
                'length' => 40
            ]);
            $table->addColumn('forum_description', 'text');
            $table->addColumn('icon', 'text');
            $table->addColumn('forum_order', 'integer', [
                'length' => 11
            ]);
        };

        $tables['moderations'] = function (TableSchema $table)
        {
            $table->addColumn('moderation_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('moderation_type', 'varchar', [
                'length' => 10
            ]);
            $table->addColumn('reason', 'text');
            $table->addColumn('user_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('post_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('operation_user_id', 'integer', [
                'length' => 11
            ]);
        };

        $tables['posts'] = function (TableSchema $table)
        {
            $table->addColumn('post_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('shortcode', 'integer', [
                'length' => 8
            ]);
            $table->addColumn('content', 'longtext');
            $table->addColumn('forum_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('discussion_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('user_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('parent_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('lastedit_date', 'integer', [
                'length' => 10,
                'default' => 0
            ]);
            $table->addColumn('lastedit_userid', 'integer', [
                'length' => 11,
                'default' => 0
            ]);
            $table->addColumn('rating_count', 'integer', [
                'length' => 11,
                'default' => 0
            ]);
            $table->addColumn('dateline', 'integer', [
                'length' => 10
            ]);
            $table->addColumn('is_active', 'integer', [
                'length' => 1,
                'default' => 1
            ]);
            $table->addColumn('device', 'longtext');
        };

        $tables['post_bookmarks'] = function (TableSchema $table)
        {
            $table->addColumn('bookmark_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('post_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('user_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('dateline', 'integer', [
                'length' => 10
            ]);
        };

        $tables['post_likes'] = function (TableSchema $table)
        {
            $table->addColumn('like_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('post_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('user_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('reaction', 'varchar', [
                'length' => 15
            ]);
            $table->addColumn('dateline', 'integer', [
                'length' => 10
            ]);
        };

        $tables['post_reports'] = function (TableSchema $table)
        {
            $table->addColumn('report_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('post_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('user_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('content', 'text');
            $table->addColumn('dateline', 'integer', [
                'length' => 10
            ]);
            $table->addColumn('is_seeing', 'integer', [
                'length' => 1,
                'default' => 0
            ]);
        };

        $tables['reports'] = function (TableSchema $table)
        {
            $table->addColumn('report_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('report_text', 'text');
            $table->addColumn('reported_user_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('operation_user_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('dateline', 'integer', [
                'length' => 10
            ]);
            $table->addColumn('is_seeing', 'integer', [
                'length' => 1,
                'default' => 0
            ]);
            $table->addColumn('is_closed', 'integer', [
                'length' => 1,
                'default' => 0
            ]);
        };

        $tables['sessions'] = function (TableSchema $table)
        {
            $table->addColumn('sessions_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('dateline', 'integer', [
                'length' => 10
            ]);
            $table->addColumn('session_id', 'varchar', [
                'length' => 40
            ]);
            $table->addColumn('type', 'varchar', [
                'length' => 10
            ]);
            $table->addColumn('route', 'varchar', [
                'length' => 80
            ]);
            $table->addColumn('user_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('ip', 'varchar', [
                'length' => 50
            ]);
        };

        $tables['settings'] = function (TableSchema $table)
        {
            $table->addColumn('setting_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('name', 'varchar', [
                'length' => 25
            ]);
            $table->addColumn('value', 'varchar', [
                'length' => 140
            ]);
            $table->addColumn('type', 'varchar', [
                'length' => 10
            ]);
            $table->addColumn('group_name', 'varchar', [
                'length' => 40
            ]);
        };

        $tables['socialsites'] = function (TableSchema $table)
        {
            $table->addColumn('site_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('title', 'varchar', [
                'length' => 40
            ]);
            $table->addColumn('name', 'varchar', [
                'length' => 40
            ]);
            $table->addColumn('api_keys', 'text');
            $table->addColumn('callback', 'text');
            $table->addColumn('is_active', 'integer', [
                'length' => 1,
                'default' => 1
            ]);
        };

        $tables['users'] = function (TableSchema $table)
        {
            $table->addColumn('user_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('username', 'varchar', [
                'length' => 20
            ]);
            $table->addColumn('usertitle', 'varchar', [
                'length' => 80,
                'default' => 'User'
            ]);
            $table->addColumn('mail', 'text');
            $table->addColumn('profile_picture', 'mediumtext');
            $table->addColumn('password', 'mediumtext');
            $table->addColumn('secret_key', 'mediumtext');
            $table->addColumn('login_key', 'varchar', [
                'length' => 100
            ]);
            $table->addColumn('status', 'integer', [
                'length' => 1
            ]);
            $table->addColumn('two_step_verification', 'integer', [
                'length' => 1
            ]);
            $table->addColumn('is_admin', 'integer', [
                'length' => 1
            ]);
            $table->addColumn('registration_date', 'integer', [
                'length' => 10
            ]);
            $table->addColumn('last_activity', 'integer', [
                'length' => 10
            ]);
            $table->addColumn('use_twofa', 'integer', [
                'length' => 1,
                'default' => 0
            ]);
            $table->addColumn('message_bg', 'varchar', [
                'length' => 200,
                'default' => '#f8f9fa'
            ]);
        };

        $tables['user_bans'] = function (TableSchema $table)
        {
            $table->addColumn('ban_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('expires', 'integer', [
                'length' => 10
            ]);
            $table->addColumn('text', 'text');
            $table->addColumn('user_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('dateline', 'integer', [
                'length' => 10
            ]);
        };

        $tables['user_friendships'] = function (TableSchema $table)
        {
            $table->addColumn('friendship_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('sender_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('user_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('awaiting', 'integer', [
                'length' => 1,
                'default' => 1
            ]);
            $table->addColumn('dateline', 'integer', [
                'length' => 10
            ]);
        };

        $tables['user_messages'] = function (TableSchema $table)
        {
            $table->addColumn('message_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('title', 'varchar', [
                'length' => 100
            ]);
            $table->addColumn('text', 'longtext');
            $table->addColumn('user_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('parent_id', 'integer', [
                'length' => 1,
                'default' => 0
            ]);
            $table->addColumn('is_seeing', 'integer', [
                'length' => 1,
                'default' => 0
            ]);
            $table->addColumn('dateline', 'integer', [
                'length' => 10
            ]);
            $table->addColumn('is_active', 'integer', [
                'length' => 1,
                'default' => 1
            ]);
            $table->addColumn('is_archived', 'integer', [
                'length' => 1,
                'default' => 0
            ]);
        };

        $tables['user_notifications'] = function (TableSchema $table)
        {
            $table->addColumn('notification_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('tab', 'varchar', [
                'length' => 50
            ]);
            $table->addColumn('post_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('discussion_id', 'integer', [
                'length' => 11,
                'default' => 0
            ]);
            $table->addColumn('user_id', 'integer', [
                'length' => 11
            ]);
            $table->addColumn('is_seeing', 'integer', [
                'length' => 1,
                'default' => 0
            ]);
            $table->addColumn('dateline', 'integer', [
                'length' => 10
            ]);
        };

        $tables['link_previews'] = function (TableSchema $table)
        {
            $table->addColumn('link_id', 'integer', [
                'length' => 11,
                'autoincrement' => true
            ]);
            $table->addColumn('uniq_id', 'varchar', [
                'length' => 40
            ]);
            $table->addColumn('json', 'blob');
            $table->addColumn('post_id', 'integer', [
                'length' => 11
            ]);
        };

        $tables['dbquery_cache_items'] = function (TableSchema $table)
        {
            $table->addColumn('item_id', 'varbinary', [
                'length' => 255,
                'autoincrement' => true
            ]);
            $table->addColumn('item_data', 'mediumblob');
            $table->addColumn('item_lifetime', 'integer', [
                'length' => 10
            ]);
            $table->addColumn('item_time', 'integer', [
                'length' => 10
            ]);
        };

        return $tables;
    }

    public function createTables()
    {
        $schema = $this->createSchemaManager();
        $tables = $this->getTables();

        $native = new Native();

        if ($schema->tablesExist(\array_keys($tables)))
        {
            throw new \Exception('Tables are exist!');
        }

        foreach ($tables as $name => $func)
        {
            $table = $func(new TableSchema($name));

            if ($native->isPlatform('mysql'))
            {
                $table->addOption('charset', 'utf8mb4');
                $table->addOption('collation', 'utf8mb4_general_ci');
            }
            else if ($native->isPlatform('sqlite') || $native->isPlatform('sqlsrv'))
            {
                $table->addOption('collation', 'utf8mb4_general_ci');
            }

            $schema->createTable($table);
        }
    }
}
