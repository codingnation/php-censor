<?php

return [
    'language_name' => 'Русский',
    'language'      => 'Язык',
    'per_page'      => 'Количество элементов на странице',
    'default'       => 'По умолчанию',

    // Log in:
    'log_in_to_app' => 'Войти в PHP Censor',
    'login_error' => 'Неправильный email или пароль',
    'forgotten_password_link' => 'Забыли пароль?',
    'reset_emailed' => 'Вы получите письмо со ссылкой на сброс пароля.',
    'reset_header' => '<strong>Не волнуйтесь!</strong><br>Просто введите ваш email, и вам придет письмо со ссылкой на сброс пароля.',
    'reset_email_address' => 'Введите ваш email:',
    'reset_send_email' => 'Сброс пароля',
    'reset_enter_password' => 'Пожалуйста, введите новый пароль',
    'reset_new_password' => 'Новый пароль:',
    'reset_change_password' => 'Сменить пароль',
    'reset_no_user_exists' => 'Пользователь с таким email-адресом не найден, пожалуйста, попробуйте еще раз.',
    'reset_email_body' => 'Привет %s,

Вы получили это письмо, потому что вы или кто-то другой запросили сброс пароля в PHP Censor.

Если это были вы, пожалуйста, перейдите по ссылке для сброса пароля: %ssession/reset-password/%d/%s,

иначе игнорируйте это письмо и ничего не предпринимайте.

Спасибо,

PHP Censor',

    'reset_email_title' => 'Сброс пароля PHP Censor для %s',
    'reset_invalid'     => 'Некорректный запрос на сброс пароля.',
    'email_address'     => 'Email',
    'login'             => 'Логин / Email',
    'password'          => 'Пароль',
    'remember_me'       => 'Запомнить меня',
    'log_in'            => 'Войти',

    // Top Nav
    'toggle_navigation' => 'Скрыть/показать панель навигации',
    'n_builds_pending' => 'Сборок ожидает: %d',
    'n_builds_running' => 'Сборок запущено: %d',
    'edit_profile' => 'Редактировать профиль',
    'sign_out' => 'Выйти',
    'branch_x' => 'Ветка: %s',
    'created_x' => 'Создан: %s',
    'started_x' => 'Запущен: %s',
    'environment_x' => 'Окружение: %s',

    // Sidebar
    'hello_name' => 'Привет, %s',
    'dashboard' => 'Панель управления',
    'admin_options' => 'Меню администратора',
    'add_project' => 'Добавить проект',
    'project_groups' => 'Группы проектов',
    'settings' => 'Настройки',
    'manage_users' => 'Пользователи',
    'plugins' => 'Плагины',
    'view' => 'Отчет',
    'build_now' => 'Собрать',
    'build_now_debug' => 'Собрать в режиме отладки',
    'edit_project' => 'Редактировать проект',
    'delete_project' => 'Удалить проект',
    'delete_old_builds' => 'Удалить старые сборки',
    'delete_all_builds' => 'Удалить все сборки',

    // Project Summary:
    'no_builds_yet' => 'Нет сборок!',
    'x_of_x_failed' => '%d из последних %d сборок были провалены.',
    'last_successful_build' => ' Последняя успешная сборка была %s.',
    'never_built_successfully' => ' Этот проект никогда не собирался успешно.',
    'all_builds_passed' => 'Все последние сборки (%d) прошли успешно.',
    'last_failed_build' => ' Последней проваленной сборкой была %s.',
    'never_failed_build' => ' У этого проекта никогда не было проваленных сборок.',
    'view_project' => 'Обзор проекта',
    'projects_with_build_errors' => 'Ошибки сборки',
    'no_build_errors' => 'Нет ошибок сборки',

    // Timeline:
    'latest_builds' => 'Последние сборки',
    'pending' => 'Ожидает',
    'running' => 'Запущена',
    'success' => 'Успешно',
    'failed' => 'Провал',
    'failed_allowed' => 'Провал (Допустим)',
    'error'  => 'Ошибка',
    'skipped' => 'Пропущено',
    'trace'   => 'Стек вызова',
    'manual_build' => 'Запущена вручную',

    // Add/Edit Project:
    'new_project' => 'Новый проект',
    'project_x_not_found' => 'Проекта с ID %d не существует.',
    'project_details' => 'Подробности проекта',
    'public_key_help' => 'Чтобы было легче начать, мы сгенерировали пару SSH-ключей для использования в вашем проекте.
                        Для их использования, просто добавьте эту публичную часть ключа в поле "deploy keys" на выбранном вами хостинге исходного кода.',
    'select_repository_type' => 'Выберите тип репозитория...',
    'github' => 'GitHub',
    'bitbucket' => 'Bitbucket',
    'gitlab' => 'GitLab',
    'git' => 'Git',
    'local' => 'Локальный путь',
    'hg'    => 'Mercurial',
    'svn'   => 'Subversion',

    'where_hosted' => 'Расположение проекта',
    'choose_github' => 'Выберите GitHub репозиторий:',

    'repo_name' => 'Репозиторий / Внешний URL / Локальный путь',
    'project_title' => 'Название проекта',
    'project_private_key' => 'Приватный ключ для доступа к репозиторию
                              (оставьте поле пустым для локального использования и/или анонимного доступа)',
    'build_config' => 'Конфигурация сборки проекта для PHP Censor
                       (если вы не добавили файл .php-censor.yml в репозиторий вашего проекта)',
    'default_branch'      => 'Ветка по умолчанию',
    'default_branch_only' => 'Собирать только ветку по умолчанию',
    'overwrite_build_config' => 'Заменить конфигурацию из файла в проекте конфигурацией из базы данных? Если чекбокс не отмечен, то конфигурации из файла и базы данных будут объединены.',
    'allow_public_status' => 'Разрешить публичный статус и изображение (статуса) для проекта',
    'archived'            => 'Архивный',
    'archived_menu'       => 'Архив',
    'save_project'        => 'Сохранить проект',
    'environments_label'  => 'Окружения (yaml)',

    'error_hg' => 'URL репозитория Mercurial должен начинаться с http:// или https://',
    'error_git' => 'URL репозитория должен начинаться с git://, http:// или https://',
    'error_gitlab' => 'Имя репозитория в GitLab должно иметь формат: "user@domain.tld:owner/repo.git"',
    'error_github' => 'Имя репозитория должно иметь формат: "owner/repo"',
    'error_bitbucket' => 'Имя репозитория должно иметь формат: "owner/repo"',
    'error_path' => 'Пути, который вы указали, не существует.',

    // View Project:
    'all_branches' => 'Все ветки',
    'all' => 'Все',
    'builds' => 'Сборки',
    'id' => 'ID',
    'date' => 'Дата',
    'project' => 'Проект',
    'commit' => 'Коммит',
    'branch' => 'Ветка',
    'environment' => 'Окружение',
    'status' => 'Статус',
    'prev_link' => '&laquo; Пред.',
    'next_link' => 'След. &raquo;',
    'public_key' => 'Публичный ключ',
    'delete_build' => 'Удалить сборку',
    'build_source' => 'Источник сборки',

    'source_unknown'                       => 'Неизвестный',
    'source_manual_web'                    => 'Вручную (Через Web)',
    'source_manual_console'                => 'Вручную (Через CLI)',
    'source_manual_rebuild_web'            => 'Пересборка для %s (Через Web)',
    'source_manual_rebuild_console'        => 'Пересборка для %s (Через CLI)',
    'source_periodical'                    => 'Периодический',
    'source_webhook_push'                  => 'Webhook (Push)',
    'source_webhook_pull_request_created'  => 'Webhook (Создан pull request)',
    'source_webhook_pull_request_updated'  => 'Webhook (Обновлен pull request)',
    'source_webhook_pull_request_approved' => 'Webhook (Одобрен pull request)',
    'source_webhook_pull_request_merged'   => 'Webhook (Объединен pull request)',

    'webhooks' => 'Webhooks',
    'webhooks_help_github' => 'Чтобы Автоматически собирать этот проект при публикации новых коммитов, добавьте URL ниже в качестве нового хука в разделе настроек <a href="https://github.com/%s/settings/hooks">Webhooks
                               and Services</a> вашего GitHub репозитория.',

    'webhooks_help_gitlab' => 'Чтобы Автоматически собирать этот проект при публикации новых коммитов, добавьте URL ниже в качестве "WebHook URL"
                                в разделе "Web Hooks" вашего GitLab репозитория.',

    'webhooks_help_gogs' => 'Чтобы Автоматически собирать этот проект при публикации новых коммитов, добавьте URL ниже в качестве "WebHook URL"
                                в разделе "Web Hooks" вашего Gogs репозитория.',

    'webhooks_help_bitbucket' => 'Чтобы Автоматически собирать этот проект при публикации новых коммитов, добавьте URL ниже как "POST" сервис в разделе <a href="https://bitbucket.org/%s/admin/services">
                                  Services</a> вашего Bitbucket репозитория.',

    // Project Groups
    'group_projects' => 'Группы проектов',
    'project_group'  => 'Группа проекта',
    'group_count'    => 'Количество проектов',
    'group_edit'     => 'Редактировать',
    'group_delete'   => 'Удалить',
    'group_add'      => 'Добавить группу',
    'group_add_edit' => 'Добавить / изменить группу',
    'group_title'    => 'Название группы',
    'group_save'     => 'Сохранить группу',

    // View Build
    'errors'            => 'Ошибки',
    'information'       => 'Информация',
    'new'               => 'Новая',
    'is_new'            => 'Новая?',
    'build_x_not_found' => 'Сборки с ID %d не существует.',
    'build_n'           => 'Сборка %d',
    'rebuild_now'       => 'Пересобрать',
    'rebuild_now_debug' => 'Пересобрать в режиме отладки',

    'all_errors'   => 'Все ошибки',
    'only_new'     => 'Только новые',
    'only_old'     => 'Только старые',
    'new_errors'   => 'Новых ошибок',
    'total_errors' => 'Ошибок',

    'committed_by_x' => 'Отправил %s',
    'commit_id_x' => 'Коммит: %s',

    'chart_display' => 'Этот график будет показан после окончания сборки.',

    'build'   => 'Сборка',
    'lines'   => 'Строк',
    'classes' => 'Классов',
    'methods' => 'Методов',
    'comment_lines' => 'Строк комментариев',
    'noncomment_lines' => 'Строк некомментариев',
    'logical_lines' => 'Строк логики',
    'lines_of_code' => 'Строк кода',
    'coverage' => 'Покрытие кода тестами PHPUnit',
    'build_log' => 'Лог сборки',
    'quality_trend' => 'Тенденция качества',
    'codeception_errors' => 'Ошибки Codeception',
    'php_mess_detector_warnings' => 'Предупреждения PHPMD',
    'php_code_sniffer_warnings' => 'Предупреждения PHPCS',
    'php_code_sniffer_errors' => 'Ошибки PHPCS',
    'phan_warnings' => 'Предупреждения Phan',
    'php_cs_fixer_warnings' => 'Предупреждения PHP CS Fixer',
    'php_parallel_lint_errors' => 'Ошибки Lint',
    'php_unit_errors' => 'Ошибки PHPUnit',
    'php_cpd_warnings' => 'Предупреждения PHP Copy/Paste Detector',
    'php_docblock_checker_warnings' => 'Пропущенные Docblocks',
    'php_tal_lint_warnings' => 'Предупреждения PHP Tal Lint',
    'php_tal_lint_errors' => 'Ошибки PHP Tal Lint',
    'behat_warnings' => 'Предупреждения Behat',
    'sensiolabs_insight_warnings' => 'Предупреждения Sensiolabs Insight',
    'technical_debt_warnings' => 'Предупреждения Technical Debt',
    'issues' => 'Проблемы',
    'merged_branches' => 'Объеденяемые ветки',

    'codeception_feature' => 'Свойство',
    'codeception_suite' => 'Набор',
    'codeception_time' => 'Время',
    'codeception_synopsis' => 'Тестов выполнено: <strong>%1$d</strong> (за <strong>%2$f</strong> сек.). Провалов: <strong>%3$d</strong>.',

    'suite' => 'Набор',
    'test'  => 'Тест',
    'file' => 'Файл',
    'line' => 'Строка',
    'class' => 'Класс',
    'method' => 'Метод',
    'message' => 'Сообщение',
    'start' => 'Начало',
    'end' => 'Конец',
    'from' => 'Из',
    'to' => 'В',
    'result' => 'Результат',
    'ok' => 'OK',
    'took_n_seconds' => 'Заняло секунд: %d',
    'build_started' => 'Сборка запущена',
    'build_finished' => 'Сборка окончена',
    'test_message' => 'Сообщение',
    'test_no_message' => 'Нет сообщений',
    'test_success' => 'Успешно: %d',
    'test_fail' => 'Провалено: %d',
    'test_skipped' => 'Пропущено: %d',
    'test_error' => 'Ошибок: %d',
    'test_todo' => 'Todo: %d',
    'test_total' => 'Тестов: %d',

    // Users
    'name' => 'Имя',
    'password_change' => 'Пароль (оставьте поле пустым, если не собираетесь менять его)',
    'save' => 'Сохранить &raquo;',
    'update_your_details' => 'Обновить свои данные',
    'your_details_updated' => 'Ваши данные были обновлены.',
    'add_user' => 'Добавить пользователя',
    'is_admin' => 'Является администратором',
    'yes' => 'Да',
    'no' => 'Нет',
    'edit' => 'Править',
    'edit_user' => 'Редактировать пользователя',
    'delete_user' => 'Удалить пользователя',
    'user_n_not_found' => 'Пользователя с ID %d не существует.',
    'is_user_admin' => 'Этот пользователь является администратором',
    'save_user' => 'Сохранить пользователя',

    // Settings:
    'settings_saved' => 'Ваши настройки были сохранены.',
    'settings_check_perms' => 'Ваши настройки не могут быть сохранены, проверьте права на файл настроек config.yml.',
    'settings_cannot_write' => 'PHP Censor не может записать config.yml файл, настройки не могут быть сохранены корректно, пока это не будет исправлено.',
    'settings_github_linked' => 'Ваш GitHub аккаунт привязан.',
    'settings_github_not_linked' => 'Ваш GitHub аккаунт не может быть привязан.',
    'build_settings' => 'Настройки сборки',
    'github_application' => 'GitHub приложение',
    'github_sign_in' => 'Перед тем как начать использовать GitHub аккаунт, вам необходимо <a href="%s">войти</a> и разрешить доступ для
                            PHP Censor до вашего аккаунта.',
    'github_app_linked' => 'PHP Censor успешно привязал GitHub аккаунт.',
    'github_where_to_find' => 'Где это найти...',
    'github_where_help' => 'Если вы владелец приложения, которое вы хотели бы использовать, то вы можете найти информацию об этом в разделе
    <a href="https://github.com/settings/applications">applications</a> настроек.',

    'email_settings' => 'Настройки email',
    'email_settings_help' => 'Перед тем, как PHP Censor начнет отсылать статус сборок по почте,
                                вам необходимо настроить параметры SMTP ниже.',

    'application_id' => 'ID приложения',
    'application_secret' => 'Секретный ключ приложения',

    'smtp_server' => 'SMTP сервер',
    'smtp_port' => 'SMTP порт',
    'smtp_username' => 'SMTP пользователь',
    'smtp_password' => 'SMTP пароль',
    'from_email_address' => 'Отправлять с email',
    'default_notification_address' => 'Email по умолчанию для оповещений',
    'use_smtp_encryption' => 'Использовать SMTP шифрование',
    'none' => 'Нет',
    'ssl' => 'SSL',
    'tls' => 'TLS',

    'failed_after' => 'Признать сборку проваленной по прошествии',
    '5_mins' => '5 минут',
    '15_mins' => '15 минут',
    '30_mins' => '30 минут',
    '1_hour' => '1 часа',
    '3_hours' => '3 часов',

    // Plugins
    'cannot_update_composer' => 'PHP Censor не может обновить composer.json, если он недоступен на запись.',
    'x_has_been_removed' => '%s был удален.',
    'x_has_been_added' => '%s был добавлен в composer.json и будет установлен, как только вы запустите composer update.',
    'enabled_plugins' => 'Включенные плагины',
    'provided_by_package' => 'Предоставляется пакетом',
    'installed_packages' => 'Установленные пакеты',
    'suggested_packages' => 'Рекомендуемые пакеты',
    'title' => 'Название',
    'description' => 'Описание',
    'version' => 'Версия',
    'install' => 'Установить &raquo;',
    'remove' => 'Удалить &raquo;',
    'search_packagist_for_more' => 'Искать на Packagist',
    'search' => 'Искать &raquo;',

    // Summary plugin
    'build-summary'  => 'Сводка',
    'stage'          => 'Этап',
    'duration'       => 'Продолжительность',
    'seconds'        => 'сек.',
    'plugin'         => 'Плагин',
    'stage_setup'    => 'Установка',
    'stage_test'     => 'Тестирование',
    'stage_deploy'   => 'Развертывание',
    'stage_complete' => 'Завершение',
    'stage_success'  => 'Успешное завершение',
    'stage_failure'  => 'Провал',
    'stage_broken'   => 'Поломка',
    'stage_fixed'    => 'Исправление',
    'severity'       => 'Уровень',

    'all_plugins'     => 'Все плагины',
    'all_severities'  => 'Все уровни',
    'filters'         => 'Фильтры',
    'errors_selected' => 'Ошибок выбрано',

    'build_details'  => 'Информация о сборке',
    'commit_details' => 'Информация о коммитe',
    'committer'      => 'Автор коммита',
    'commit_message' => 'Сообщение в коммите',
    'timing'         => 'Тайминг',
    'created'        => 'Создана',
    'started'        => 'Началась',
    'finished'       => 'Закончилась',

    // Update
    'update_app' => 'Обновите базу данных с учетом обновленных моделей.',
    'updating_app' => 'Обновление базы данных PHP Censor: ',
    'not_installed' => 'PHP Censor не может быть установлен.',
    'install_instead' => 'Пожалуйста, установите PHP Censor с помощью команды php-censor:install.',

    // Create Build Command
    'add_to_queue_failed' => 'Сборка успешно создана, но возникла проблема при добавлении сборки в очередь. Обычно такое происходит, когда PHP Censor пытается работать с несуществующим или остановленным сервером очередей Beanstalkd.',

    // Build Plugins:
    'passing_build' => 'Успех сборки',
    'failing_build' => 'Провал сборки',
    'log_output' => 'Вывод лога: ',

    // Error Levels:
    'critical' => 'Критичный',
    'high'     => 'Высокий',
    'normal'   => 'Нормальный',
    'low'      => 'Низкий',

    // Plugins that generate errors:
    'php_mess_detector'    => 'PHP Mess Detector',
    'php_code_sniffer'     => 'PHP Code Sniffer',
    'php_unit'             => 'PHP Unit',
    'php_cpd'              => 'PHP Copy/Paste Detector',
    'php_docblock_checker' => 'PHP Docblock Checker',
    'composer'             => 'Composer',
    'php_loc'              => 'PHP LOC',
    'php_parallel_lint'    => 'PHP Parallel Lint',
    'email'                => 'Email',
    'atoum'                => 'Atoum',
    'behat'                => 'Behat',
    'campfire'             => 'Campfire',
    'clean_build'          => 'Clean Build',
    'codeception'          => 'Codeception',
    'copy_build'           => 'Copy Build',
    'deployer'             => 'Deployer',
    'env'                  => 'Env',
    'grunt'                => 'Grunt',
    'hipchat_notify'       => 'Hipchat',
    'irc'                  => 'IRC',
    'lint'                 => 'Lint',
    'mysql'                => 'MySQL',
    'package_build'        => 'Package Build',
    'pdepend'              => 'PDepend',
    'pgsql'                => 'PostgreSQL',
    'phan'                 => 'Phan',
    'phar'                 => 'Phar',
    'phing'                => 'Phing',
    'php_cs_fixer'         => 'PHP Coding Standards Fixer',
    'php_spec'             => 'PHP Spec',
    'shell'                => 'Shell',
    'slack_notify'         => 'Slack',
    'technical_debt'       => 'Technical Debt',
    'xmpp'                 => 'XMPP',
    'security_checker'     => 'SensioLabs Security Checker',

    'confirm_message' => 'Элемент будет удален навсегда. Вы уверены?',
    'confirm_title'   => 'Подтвержение удаления',
    'confirm_ok'      => 'Удалить',
    'confirm_cancel'  => 'Отмена',
    'confirm_success' => 'Элемент успешно удален.',
    'confirm_failed'  => 'Удаление провалилось! Ответ сервера: ',

    'public_status_title' => 'Публичный статус',
    'public_status_image' => 'Иконка статуса',
    'public_status_page'  => 'Страница публичного статуса',
];
