<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * This file defines configuration for running the unit tests for the Zend
 * Framework.  Some tests have dependencies to PHP extensions or databases
 * which may not necessary installed on the target system.  For these cases,
 * the ability to disable or configure testing is provided below.  Tests for
 * components which should run universally are always run by the master
 * suite and cannot be disabled.
 *
 * Do not edit this file. Instead, copy this file to TestConfiguration.php,
 * and edit the new file. Never commit plaintext passwords to the source
 * code repository.
 */

/**
 * Zend_Cache
 *
 * TESTS_ZEND_CACHE_MEMCACHED_ENABLED  => memcache extension has to be enabled and
 *                                        a memcached server has to be available
 * TESTS_ZEND_CACHE_LIBMEMCACHED_ENABLED => memcached extension has to be enabled and
 *                                          a memcached server has to be available
 */
defined('TESTS_ZEND_CACHE_MEMCACHED_ENABLED') || define('TESTS_ZEND_CACHE_MEMCACHED_ENABLED', true);
defined('TESTS_ZEND_CACHE_LIBMEMCACHED_ENABLED') || define('TESTS_ZEND_CACHE_LIBMEMCACHED_ENABLED', true);

/**
 * Zend_Db_Adapter_Pdo_Mysql and Zend_Db_Adapter_Mysqli
 *
 * There are separate properties to enable tests for the PDO_MYSQL adapter and
 * the native Mysqli adapters, but the other properties are shared between the
 * two MySQL-related Zend_Db adapters.
 */
// Skip testing ext/mysqli for PHP 5.4/5.5, as the error is not fixable
// https://github.com/zf1s/zf1/pull/49/files#r565875073
defined('TESTS_ZEND_DB_ADAPTER_PDO_MYSQL_ENABLED') || define('TESTS_ZEND_DB_ADAPTER_PDO_MYSQL_ENABLED', true);
defined('TESTS_ZEND_DB_ADAPTER_MYSQLI_ENABLED') || define('TESTS_ZEND_DB_ADAPTER_MYSQLI_ENABLED', !(PHP_VERSION_ID >= 50400 && PHP_VERSION_ID < 50600));
defined('TESTS_ZEND_DB_ADAPTER_MYSQL_HOSTNAME') || define('TESTS_ZEND_DB_ADAPTER_MYSQL_HOSTNAME', getenv('MYSQL_HOST'));
defined('TESTS_ZEND_DB_ADAPTER_MYSQL_USERNAME') || define('TESTS_ZEND_DB_ADAPTER_MYSQL_USERNAME', getenv('MYSQL_USER'));
defined('TESTS_ZEND_DB_ADAPTER_MYSQL_PASSWORD') || define('TESTS_ZEND_DB_ADAPTER_MYSQL_PASSWORD', getenv('MYSQL_PASSWORD'));
defined('TESTS_ZEND_DB_ADAPTER_MYSQL_DATABASE') || define('TESTS_ZEND_DB_ADAPTER_MYSQL_DATABASE', getenv('MYSQL_DATABASE'));

/**
 * Zend_Db_Adapter_Pdo_Pgsql
 */
defined('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_ENABLED') || define('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_ENABLED',  true);
defined('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_HOSTNAME') || define('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_HOSTNAME', getenv('POSTGRES_HOST'));
defined('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_USERNAME') || define('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_USERNAME', getenv('POSTGRES_USER'));
defined('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_PASSWORD') || define('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_PASSWORD', getenv('POSTGRES_PASSWORD'));
defined('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_DATABASE') || define('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_DATABASE', getenv('POSTGRES_DB'));

/**
 * Zend_Db_Adapter_Pdo_Sqlite
 *
 * Username and password are irrelevant for SQLite.
 */
defined('TESTS_ZEND_DB_ADAPTER_PDO_SQLITE_ENABLED') || define('TESTS_ZEND_DB_ADAPTER_PDO_SQLITE_ENABLED',  true);
defined('TESTS_ZEND_DB_ADAPTER_PDO_SQLITE_DATABASE') || define('TESTS_ZEND_DB_ADAPTER_PDO_SQLITE_DATABASE', ':memory:');

/**
 * Zend_Auth_Adapter_DbTable
 */
defined('TESTS_ZEND_AUTH_ADAPTER_DBTABLE_PDO_SQLITE_ENABLED') || define('TESTS_ZEND_AUTH_ADAPTER_DBTABLE_PDO_SQLITE_ENABLED', true);
defined('TESTS_ZEND_AUTH_ADAPTER_DBTABLE_PDO_SQLITE_DATABASE') || define('TESTS_ZEND_AUTH_ADAPTER_DBTABLE_PDO_SQLITE_DATABASE', ':memory:');

/**
 * Zend_Auth_Adapter_Ldap online tests
 * (See also TESTS_ZEND_LDAP_* configuration constants below)
 */
defined('TESTS_ZEND_AUTH_ADAPTER_LDAP_ONLINE_ENABLED') || define('TESTS_ZEND_AUTH_ADAPTER_LDAP_ONLINE_ENABLED', true);

/**
 * Zend_Cache
 *
 */
defined('TESTS_ZEND_CACHE_SQLITE_ENABLED') || define('TESTS_ZEND_CACHE_SQLITE_ENABLED', true);

/**
 * Zend_Ldap tests
 */
defined('TESTS_ZEND_LDAP_HOST') || define('TESTS_ZEND_LDAP_HOST', 'localhost');
defined('TESTS_ZEND_LDAP_PORT') || define('TESTS_ZEND_LDAP_PORT', 1389);
defined('TESTS_ZEND_LDAP_USE_START_TLS') || define('TESTS_ZEND_LDAP_USE_START_TLS', false);
defined('TESTS_ZEND_LDAP_USE_SSL') || define('TESTS_ZEND_LDAP_USE_SSL', false);
defined('TESTS_ZEND_LDAP_USERNAME') || define('TESTS_ZEND_LDAP_USERNAME', 'cn=admin,dc=example,dc=com');
defined('TESTS_ZEND_LDAP_PRINCIPAL_NAME') || define('TESTS_ZEND_LDAP_PRINCIPAL_NAME', 'admin@example.com');
defined('TESTS_ZEND_LDAP_PASSWORD') || define('TESTS_ZEND_LDAP_PASSWORD', 'insecure');
defined('TESTS_ZEND_LDAP_BIND_REQUIRES_DN') || define('TESTS_ZEND_LDAP_BIND_REQUIRES_DN', 'true');
defined('TESTS_ZEND_LDAP_BASE_DN') || define('TESTS_ZEND_LDAP_BASE_DN', 'dc=example,dc=com');
defined('TESTS_ZEND_LDAP_ACCOUNT_FILTER_FORMAT') || define('TESTS_ZEND_LDAP_ACCOUNT_FILTER_FORMAT', '(&(objectClass=account)(uid=%s))');
defined('TESTS_ZEND_LDAP_ACCOUNT_DOMAIN_NAME') || define('TESTS_ZEND_LDAP_ACCOUNT_DOMAIN_NAME', 'example.com');
defined('TESTS_ZEND_LDAP_ACCOUNT_DOMAIN_NAME_SHORT') || define('TESTS_ZEND_LDAP_ACCOUNT_DOMAIN_NAME_SHORT', 'EXAMPLE');
defined('TESTS_ZEND_LDAP_ALT_USERNAME') || define('TESTS_ZEND_LDAP_ALT_USERNAME', 'user1');
defined('TESTS_ZEND_LDAP_ALT_PRINCIPAL_NAME') || define('TESTS_ZEND_LDAP_ALT_PRINCIPAL_NAME', 'user1@example.com');
defined('TESTS_ZEND_LDAP_ALT_DN') || define('TESTS_ZEND_LDAP_ALT_DN', 'uid=user1,dc=example,dc=com');
defined('TESTS_ZEND_LDAP_ALT_PASSWORD') || define('TESTS_ZEND_LDAP_ALT_PASSWORD', 'user1');
defined('TESTS_ZEND_LDAP_WRITEABLE_SUBTREE') || define('TESTS_ZEND_LDAP_WRITEABLE_SUBTREE', 'ou=test,dc=example,dc=com');
defined('TESTS_ZEND_LDAP_ONLINE_ENABLED') || define('TESTS_ZEND_LDAP_ONLINE_ENABLED', true);

require_once dirname(__FILE__) . '/TestConfiguration.dist.php';
