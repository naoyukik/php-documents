/**
 * (PECL mysqlnd_ms >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.mysqlnd-ms-get-stats.php
 * @return array Returns NULL if
 * the PHP configuration directive
 * mysqlnd_ms.enable
 * has disabled the plugin. Otherwise, returns array of statistics.NULLmysqlnd_ms.enablemysqlnd_ms.enableArray of statisticsStatistic
 * Description
 * Version
 * use_slave
 * The semantics of this statistic has changed between 1.0.1 - 1.1.0.
 * The meaning for version 1.0.1 is as follows.
 * Number of statements considered as read-only by the built-in query analyzer.
 * Neither statements which begin with a SQL hint to force
 * use of slave nor statements directed to a slave by an user-defined
 * callback are included. The total number of statements sent to the slaves is
 * use_slave + use_slave_sql_hint +
 * use_slave_callback.
 * PECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The
 * statistics is now set by the internal load balancing filter. With
 * version 1.1.0 the load balancing filter is always the last in the
 * filter chain, if used. In future versions a load balancing filter may be
 * followed by other filters causing another change in the meaning of
 * the statistic. If, in the future, a load balancing filter is followed
 * by another filter it is no longer guaranteed that the statement, which
 * increments use_slave, will be executed on the slaves.
 * The meaning for version 1.1.0 is as follows. Number of statements
 * sent to the slaves. Statements directed to a slave by the user filter
 * (an user-defined callback) are not included. The latter are counted by
 * use_slave_callback.
 * Since 1.0.0.
 * use_master
 * The semantics of this statistic has changed between 1.0.1 - 1.1.0.
 * The meaning for version 1.0.1 is as follows.
 * Number of statements not considered as read-only by the built-in query analyzer.
 * Neither statements which begin with a SQL hint to force
 * use of master nor statements directed to a master by an user-defined
 * callback are included. The total number of statements sent to the master is
 * use_master + use_master_sql_hint +
 * use_master_callback.
 * PECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The
 * statictics is now set by the internal load balancing filter. With
 * version 1.1.0 the load balancing filter is always the last in the
 * filter chain, if used. In future versions a load balancing filter may be
 * followed by other filters causing another change in the meaning of
 * the statistic. If, in the future, a load balancing filter is followed
 * by another filter it is no longer guaranteed that the statement, which
 * increments use_master, will be executed on the slaves.
 * The meaning for version 1.1.0 is as follows. Number of statements
 * sent to the masters. Statements directed to a master by the user filter
 * (an user-defined callback) are not included. The latter are counted by
 * use_master_callback.
 * Since 1.0.0.
 * use_slave_guess
 * Number of statements the built-in query analyzer recommends sending to
 * a slave because they contain no SQL hint to force use of a
 * certain server. The recommendation may be overruled in the following.
 * It is not guaranteed whether the statement will be executed on a slave
 * or not. This is how often the internal is_select
 * function has guessed that a slave shall be used. Please, see also the
 * user space function mysqlnd_ms_query_is_select.
 * Since 1.1.0.
 * use_master_guess
 * Number of statements the built-in query analyzer recommends sending to
 * a master because they contain no SQL hint to force use of a
 * certain server. The recommendation may be overruled in the following.
 * It is not guaranteed whether the statement will be executed on a slave
 * or not. This is how often the internal is_select
 * function has guessed that a master shall be used. Please, see also the
 * user space function mysqlnd_ms_query_is_select.
 * Since 1.1.0.
 * use_slave_sql_hint
 * Number of statements sent to a slave because statement begins with
 * the SQL hint to force use of slave.
 * Since 1.0.0.
 * use_master_sql_hint
 * Number of statements sent to a master because statement begins with
 * the SQL hint to force use of master.
 * Since 1.0.0.
 * use_last_used_sql_hint
 * Number of statements sent to server which has run the previous statement,
 * because statement begins with the SQL hint to force use of previously
 * used server.
 * Since 1.0.0.
 * use_slave_callback
 * Number of statements sent to a slave because an user-defined callback
 * has chosen a slave server for statement execution.
 * Since 1.0.0.
 * use_master_callback
 * Number of statements sent to a master because an user-defined callback
 * has chosen a master server for statement execution.
 * Since 1.0.0.
 * non_lazy_connections_slave_success
 * Number of successfully opened slave connections from
 * configurations not using
 * lazy connections.
 * The total number of successfully opened slave connections
 * is non_lazy_connections_slave_success +
 * lazy_connections_slave_success
 * Since 1.0.0.
 * non_lazy_connections_slave_failure
 * Number of failed slave connection attempts from
 * configurations not using
 * lazy connections.
 * The total number of failed slave connection attempts
 * is non_lazy_connections_slave_failure +
 * lazy_connections_slave_failure
 * Since 1.0.0.
 * non_lazy_connections_master_success
 * Number of successfully opened master connections from
 * configurations not using
 * lazy connections.
 * The total number of successfully opened master connections
 * is non_lazy_connections_master_success +
 * lazy_connections_master_success
 * Since 1.0.0.
 * non_lazy_connections_master_failure
 * Number of failed master connection attempts from
 * configurations not using
 * lazy connections.
 * The total number of failed master connection attempts
 * is non_lazy_connections_master_failure +
 * lazy_connections_master_failure
 * Since 1.0.0.
 * lazy_connections_slave_success
 * Number of successfully opened slave connections from
 * configurations using
 * lazy connections.
 * Since 1.0.0.
 * lazy_connections_slave_failure
 * Number of failed slave connection attempts from
 * configurations using
 * lazy connections.
 * Since 1.0.0.
 * lazy_connections_master_success
 * Number of successfully opened master connections from
 * configurations using
 * lazy connections.
 * Since 1.0.0.
 * lazy_connections_master_failure
 * Number of failed master connection attempts from
 * configurations using
 * lazy connections.
 * Since 1.0.0.
 * trx_autocommit_on
 * Number of autocommit mode activations via API calls.
 * This figure may be used to monitor activity related to the plugin configuration
 * setting
 * trx_stickiness.
 * If, for example, you want to know if a certain API call invokes the
 * mysqlnd library function trx_autocommit(),
 * which is a requirement for
 * trx_stickiness,
 * you may call the user API function in question and check if the
 * statistic has changed. The statistic is modified only by the
 * plugins internal subclassed trx_autocommit()
 * method.
 * Since 1.0.0.
 * trx_autocommit_off
 * Number of autocommit mode deactivations via API calls.
 * Since 1.0.0.
 * trx_master_forced
 * Number of statements redirected to the master while
 * trx_stickiness=master
 * and autocommit mode is disabled.
 * Since 1.0.0.
 * gtid_autocommit_injections_success
 * Number of successful SQL injections in autocommit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.
 * gtid_autocommit_injections_failure
 * Number of failed SQL injections in autocommit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.
 * gtid_commit_injections_success
 * Number of successful SQL injections in commit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.
 * gtid_commit_injections_failure
 * Number of failed SQL injections in commit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.
 * gtid_implicit_commit_injections_success
 * Number of successful SQL injections when implicit commit is detected as part
 * of the plugins client-side
 * global transaction id emulation.
 * Implicit commit happens, for example, when autocommit has been turned
 * off, a query is executed and autocommit is enabled again. In that case,
 * the statement will be committed by the server and SQL to maintain is
 * injected before the autocommit is re-enabled. Another sequence
 * causing an implicit commit is begin(),
 * query(), begin(). The second call
 * to begin() will implicitly commit the transaction
 * started by the first call to begin().
 * begin() refers to internal library calls not actual
 * PHP user API calls.
 * Since 1.2.0.
 * gtid_implicit_commit_injections_failure
 * Number of failed SQL injections when implicit commit is detected as part
 * of the plugins client-side
 * global transaction id emulation.
 * Implicit commit happens, for example, when autocommit has been turned
 * off, a query is executed and autocommit is enabled again. In that case,
 * the statement will be committed by the server and SQL to maintain is
 * injected before the autocommit is re-enabled.
 * Since 1.2.0.
 * transient_error_retries
 * How often an operation has been retried when a transient error was
 * detected. See also,
 * transient_error
 * plugin configuration file setting.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_success
 * Number of successful sharding.lookup_servers
 * remote procedure calls to MySQL Fabric.
 * A call is considered successful if the plugin could reach MySQL
 * Fabric and got any reply. The reply itself may or may not be
 * understood by the plugin. Success refers to the network transport
 * only. If the reply was not understood or indicates a valid error condition,
 * fabric_sharding_lookup_servers_xml_failure
 * gets incremented.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_failure
 * Number of failed sharding.lookup_servers
 * remote procedure calls to MySQL Fabric.
 * A remote procedure call is considered failed if there was a
 * network error in connecting to, writing to or reading from
 * MySQL Fabric.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_time_total
 * Time spent connecting to,writing to and reading from MySQL
 * Fabrich during the sharding.lookup_servers
 * remote procedure call. The value is aggregated for all calls. Time is
 * measured in microseconds.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_bytes_total
 * Total number of bytes received from MySQL Fabric in reply to
 * sharding.lookup_servers calls.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_xml_failure
 * How often a reply from MySQL Fabric to
 * sharding.lookup_servers calls was not understood.
 * Please note, the current experimental implementation does not
 * distinguish between valid errors returned and malformed replies.
 * Since 1.6.0.
 * xa_begin
 * How many XA/distributed transactions have been started
 * using mysqlnd_ms_xa_begin.
 * Since 1.6.0.
 * xa_commit_success
 * How many XA/distributed transactions have been successfully committed
 * using mysqlnd_ms_xa_commit.
 * Since 1.6.0.
 * xa_commit_failure
 * How many XA/distributed transactions failed to commit
 * during mysqlnd_ms_xa_commit.
 * Since 1.6.0.
 * xa_rollback_success
 * How many XA/distributed transactions have been successfully rolled back
 * using mysqlnd_ms_xa_rollback. The figure does
 * not include implict rollbacks performed as a result of
 * mysqlnd_ms_xa_commit failure.
 * Since 1.6.0.
 * xa_rollback_failure
 * How many XA/distributed transactions could not be rolled back.
 * This includes failures of mysqlnd_ms_xa_rollback
 * but also failured during rollback when closing a connection, if
 * rollback_on_close is set. Please, see also
 * xa_rollback_on_close below.
 * Since 1.6.0.
 * xa_participants
 * Total number of participants in any XA transaction started with
 * mysqlnd_ms_xa_begin.
 * Since 1.6.0.
 * xa_rollback_on_close
 * How many XA transactions have been rolled back implicitly when
 * a connection was close and rollback_on_close is set.
 * Depending on your coding policies, this may hint a flaw in your code as
 * you may prefer to explicitly clean up resources.
 * Since 1.6.0.
 * pool_masters_total
 * Number of master servers (connections) in the internal connection pool.
 * Since 1.6.0.
 * pool_slaves_total
 * Number of slave servers (connections) in the internal connection pool.
 * Since 1.6.0.
 * pool_masters_active
 * Number of master servers (connections) from the internal connection pool
 * which are currently used for picking a connection.
 * Since 1.6.0.
 * pool_slaves_active
 * Number of slave servers (connections) from the internal connection pool
 * which are currently used for picking a connection.
 * Since 1.6.0.
 * pool_updates
 * How often the active connection list has been replaced and a
 * new set of master and slave servers had been installed.
 * Since 1.6.0.
 * pool_master_reactivated
 * How often a master connection has been reused after being
 * flushed from the active list.
 * Since 1.6.0.
 * pool_slave_reactivated
 * How often a slave connection has been reused after being
 * flushed from the active list.
 * Since 1.6.0.Statistic
 * Description
 * Version
 * use_slave
 * The semantics of this statistic has changed between 1.0.1 - 1.1.0.
 * The meaning for version 1.0.1 is as follows.
 * Number of statements considered as read-only by the built-in query analyzer.
 * Neither statements which begin with a SQL hint to force
 * use of slave nor statements directed to a slave by an user-defined
 * callback are included. The total number of statements sent to the slaves is
 * use_slave + use_slave_sql_hint +
 * use_slave_callback.
 * PECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The
 * statistics is now set by the internal load balancing filter. With
 * version 1.1.0 the load balancing filter is always the last in the
 * filter chain, if used. In future versions a load balancing filter may be
 * followed by other filters causing another change in the meaning of
 * the statistic. If, in the future, a load balancing filter is followed
 * by another filter it is no longer guaranteed that the statement, which
 * increments use_slave, will be executed on the slaves.
 * The meaning for version 1.1.0 is as follows. Number of statements
 * sent to the slaves. Statements directed to a slave by the user filter
 * (an user-defined callback) are not included. The latter are counted by
 * use_slave_callback.
 * Since 1.0.0.
 * use_master
 * The semantics of this statistic has changed between 1.0.1 - 1.1.0.
 * The meaning for version 1.0.1 is as follows.
 * Number of statements not considered as read-only by the built-in query analyzer.
 * Neither statements which begin with a SQL hint to force
 * use of master nor statements directed to a master by an user-defined
 * callback are included. The total number of statements sent to the master is
 * use_master + use_master_sql_hint +
 * use_master_callback.
 * PECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The
 * statictics is now set by the internal load balancing filter. With
 * version 1.1.0 the load balancing filter is always the last in the
 * filter chain, if used. In future versions a load balancing filter may be
 * followed by other filters causing another change in the meaning of
 * the statistic. If, in the future, a load balancing filter is followed
 * by another filter it is no longer guaranteed that the statement, which
 * increments use_master, will be executed on the slaves.
 * The meaning for version 1.1.0 is as follows. Number of statements
 * sent to the masters. Statements directed to a master by the user filter
 * (an user-defined callback) are not included. The latter are counted by
 * use_master_callback.
 * Since 1.0.0.
 * use_slave_guess
 * Number of statements the built-in query analyzer recommends sending to
 * a slave because they contain no SQL hint to force use of a
 * certain server. The recommendation may be overruled in the following.
 * It is not guaranteed whether the statement will be executed on a slave
 * or not. This is how often the internal is_select
 * function has guessed that a slave shall be used. Please, see also the
 * user space function mysqlnd_ms_query_is_select.
 * Since 1.1.0.
 * use_master_guess
 * Number of statements the built-in query analyzer recommends sending to
 * a master because they contain no SQL hint to force use of a
 * certain server. The recommendation may be overruled in the following.
 * It is not guaranteed whether the statement will be executed on a slave
 * or not. This is how often the internal is_select
 * function has guessed that a master shall be used. Please, see also the
 * user space function mysqlnd_ms_query_is_select.
 * Since 1.1.0.
 * use_slave_sql_hint
 * Number of statements sent to a slave because statement begins with
 * the SQL hint to force use of slave.
 * Since 1.0.0.
 * use_master_sql_hint
 * Number of statements sent to a master because statement begins with
 * the SQL hint to force use of master.
 * Since 1.0.0.
 * use_last_used_sql_hint
 * Number of statements sent to server which has run the previous statement,
 * because statement begins with the SQL hint to force use of previously
 * used server.
 * Since 1.0.0.
 * use_slave_callback
 * Number of statements sent to a slave because an user-defined callback
 * has chosen a slave server for statement execution.
 * Since 1.0.0.
 * use_master_callback
 * Number of statements sent to a master because an user-defined callback
 * has chosen a master server for statement execution.
 * Since 1.0.0.
 * non_lazy_connections_slave_success
 * Number of successfully opened slave connections from
 * configurations not using
 * lazy connections.
 * The total number of successfully opened slave connections
 * is non_lazy_connections_slave_success +
 * lazy_connections_slave_success
 * Since 1.0.0.
 * non_lazy_connections_slave_failure
 * Number of failed slave connection attempts from
 * configurations not using
 * lazy connections.
 * The total number of failed slave connection attempts
 * is non_lazy_connections_slave_failure +
 * lazy_connections_slave_failure
 * Since 1.0.0.
 * non_lazy_connections_master_success
 * Number of successfully opened master connections from
 * configurations not using
 * lazy connections.
 * The total number of successfully opened master connections
 * is non_lazy_connections_master_success +
 * lazy_connections_master_success
 * Since 1.0.0.
 * non_lazy_connections_master_failure
 * Number of failed master connection attempts from
 * configurations not using
 * lazy connections.
 * The total number of failed master connection attempts
 * is non_lazy_connections_master_failure +
 * lazy_connections_master_failure
 * Since 1.0.0.
 * lazy_connections_slave_success
 * Number of successfully opened slave connections from
 * configurations using
 * lazy connections.
 * Since 1.0.0.
 * lazy_connections_slave_failure
 * Number of failed slave connection attempts from
 * configurations using
 * lazy connections.
 * Since 1.0.0.
 * lazy_connections_master_success
 * Number of successfully opened master connections from
 * configurations using
 * lazy connections.
 * Since 1.0.0.
 * lazy_connections_master_failure
 * Number of failed master connection attempts from
 * configurations using
 * lazy connections.
 * Since 1.0.0.
 * trx_autocommit_on
 * Number of autocommit mode activations via API calls.
 * This figure may be used to monitor activity related to the plugin configuration
 * setting
 * trx_stickiness.
 * If, for example, you want to know if a certain API call invokes the
 * mysqlnd library function trx_autocommit(),
 * which is a requirement for
 * trx_stickiness,
 * you may call the user API function in question and check if the
 * statistic has changed. The statistic is modified only by the
 * plugins internal subclassed trx_autocommit()
 * method.
 * Since 1.0.0.
 * trx_autocommit_off
 * Number of autocommit mode deactivations via API calls.
 * Since 1.0.0.
 * trx_master_forced
 * Number of statements redirected to the master while
 * trx_stickiness=master
 * and autocommit mode is disabled.
 * Since 1.0.0.
 * gtid_autocommit_injections_success
 * Number of successful SQL injections in autocommit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.
 * gtid_autocommit_injections_failure
 * Number of failed SQL injections in autocommit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.
 * gtid_commit_injections_success
 * Number of successful SQL injections in commit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.
 * gtid_commit_injections_failure
 * Number of failed SQL injections in commit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.
 * gtid_implicit_commit_injections_success
 * Number of successful SQL injections when implicit commit is detected as part
 * of the plugins client-side
 * global transaction id emulation.
 * Implicit commit happens, for example, when autocommit has been turned
 * off, a query is executed and autocommit is enabled again. In that case,
 * the statement will be committed by the server and SQL to maintain is
 * injected before the autocommit is re-enabled. Another sequence
 * causing an implicit commit is begin(),
 * query(), begin(). The second call
 * to begin() will implicitly commit the transaction
 * started by the first call to begin().
 * begin() refers to internal library calls not actual
 * PHP user API calls.
 * Since 1.2.0.
 * gtid_implicit_commit_injections_failure
 * Number of failed SQL injections when implicit commit is detected as part
 * of the plugins client-side
 * global transaction id emulation.
 * Implicit commit happens, for example, when autocommit has been turned
 * off, a query is executed and autocommit is enabled again. In that case,
 * the statement will be committed by the server and SQL to maintain is
 * injected before the autocommit is re-enabled.
 * Since 1.2.0.
 * transient_error_retries
 * How often an operation has been retried when a transient error was
 * detected. See also,
 * transient_error
 * plugin configuration file setting.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_success
 * Number of successful sharding.lookup_servers
 * remote procedure calls to MySQL Fabric.
 * A call is considered successful if the plugin could reach MySQL
 * Fabric and got any reply. The reply itself may or may not be
 * understood by the plugin. Success refers to the network transport
 * only. If the reply was not understood or indicates a valid error condition,
 * fabric_sharding_lookup_servers_xml_failure
 * gets incremented.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_failure
 * Number of failed sharding.lookup_servers
 * remote procedure calls to MySQL Fabric.
 * A remote procedure call is considered failed if there was a
 * network error in connecting to, writing to or reading from
 * MySQL Fabric.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_time_total
 * Time spent connecting to,writing to and reading from MySQL
 * Fabrich during the sharding.lookup_servers
 * remote procedure call. The value is aggregated for all calls. Time is
 * measured in microseconds.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_bytes_total
 * Total number of bytes received from MySQL Fabric in reply to
 * sharding.lookup_servers calls.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_xml_failure
 * How often a reply from MySQL Fabric to
 * sharding.lookup_servers calls was not understood.
 * Please note, the current experimental implementation does not
 * distinguish between valid errors returned and malformed replies.
 * Since 1.6.0.
 * xa_begin
 * How many XA/distributed transactions have been started
 * using mysqlnd_ms_xa_begin.
 * Since 1.6.0.
 * xa_commit_success
 * How many XA/distributed transactions have been successfully committed
 * using mysqlnd_ms_xa_commit.
 * Since 1.6.0.
 * xa_commit_failure
 * How many XA/distributed transactions failed to commit
 * during mysqlnd_ms_xa_commit.
 * Since 1.6.0.
 * xa_rollback_success
 * How many XA/distributed transactions have been successfully rolled back
 * using mysqlnd_ms_xa_rollback. The figure does
 * not include implict rollbacks performed as a result of
 * mysqlnd_ms_xa_commit failure.
 * Since 1.6.0.
 * xa_rollback_failure
 * How many XA/distributed transactions could not be rolled back.
 * This includes failures of mysqlnd_ms_xa_rollback
 * but also failured during rollback when closing a connection, if
 * rollback_on_close is set. Please, see also
 * xa_rollback_on_close below.
 * Since 1.6.0.
 * xa_participants
 * Total number of participants in any XA transaction started with
 * mysqlnd_ms_xa_begin.
 * Since 1.6.0.
 * xa_rollback_on_close
 * How many XA transactions have been rolled back implicitly when
 * a connection was close and rollback_on_close is set.
 * Depending on your coding policies, this may hint a flaw in your code as
 * you may prefer to explicitly clean up resources.
 * Since 1.6.0.
 * pool_masters_total
 * Number of master servers (connections) in the internal connection pool.
 * Since 1.6.0.
 * pool_slaves_total
 * Number of slave servers (connections) in the internal connection pool.
 * Since 1.6.0.
 * pool_masters_active
 * Number of master servers (connections) from the internal connection pool
 * which are currently used for picking a connection.
 * Since 1.6.0.
 * pool_slaves_active
 * Number of slave servers (connections) from the internal connection pool
 * which are currently used for picking a connection.
 * Since 1.6.0.
 * pool_updates
 * How often the active connection list has been replaced and a
 * new set of master and slave servers had been installed.
 * Since 1.6.0.
 * pool_master_reactivated
 * How often a master connection has been reused after being
 * flushed from the active list.
 * Since 1.6.0.
 * pool_slave_reactivated
 * How often a slave connection has been reused after being
 * flushed from the active list.
 * Since 1.6.0.Statistic
 * Description
 * VersionStatistic
 * Description
 * VersionStatisticDescriptionVersionuse_slave
 * The semantics of this statistic has changed between 1.0.1 - 1.1.0.
 * The meaning for version 1.0.1 is as follows.
 * Number of statements considered as read-only by the built-in query analyzer.
 * Neither statements which begin with a SQL hint to force
 * use of slave nor statements directed to a slave by an user-defined
 * callback are included. The total number of statements sent to the slaves is
 * use_slave + use_slave_sql_hint +
 * use_slave_callback.
 * PECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The
 * statistics is now set by the internal load balancing filter. With
 * version 1.1.0 the load balancing filter is always the last in the
 * filter chain, if used. In future versions a load balancing filter may be
 * followed by other filters causing another change in the meaning of
 * the statistic. If, in the future, a load balancing filter is followed
 * by another filter it is no longer guaranteed that the statement, which
 * increments use_slave, will be executed on the slaves.
 * The meaning for version 1.1.0 is as follows. Number of statements
 * sent to the slaves. Statements directed to a slave by the user filter
 * (an user-defined callback) are not included. The latter are counted by
 * use_slave_callback.
 * Since 1.0.0.
 * use_master
 * The semantics of this statistic has changed between 1.0.1 - 1.1.0.
 * The meaning for version 1.0.1 is as follows.
 * Number of statements not considered as read-only by the built-in query analyzer.
 * Neither statements which begin with a SQL hint to force
 * use of master nor statements directed to a master by an user-defined
 * callback are included. The total number of statements sent to the master is
 * use_master + use_master_sql_hint +
 * use_master_callback.
 * PECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The
 * statictics is now set by the internal load balancing filter. With
 * version 1.1.0 the load balancing filter is always the last in the
 * filter chain, if used. In future versions a load balancing filter may be
 * followed by other filters causing another change in the meaning of
 * the statistic. If, in the future, a load balancing filter is followed
 * by another filter it is no longer guaranteed that the statement, which
 * increments use_master, will be executed on the slaves.
 * The meaning for version 1.1.0 is as follows. Number of statements
 * sent to the masters. Statements directed to a master by the user filter
 * (an user-defined callback) are not included. The latter are counted by
 * use_master_callback.
 * Since 1.0.0.
 * use_slave_guess
 * Number of statements the built-in query analyzer recommends sending to
 * a slave because they contain no SQL hint to force use of a
 * certain server. The recommendation may be overruled in the following.
 * It is not guaranteed whether the statement will be executed on a slave
 * or not. This is how often the internal is_select
 * function has guessed that a slave shall be used. Please, see also the
 * user space function mysqlnd_ms_query_is_select.
 * Since 1.1.0.
 * use_master_guess
 * Number of statements the built-in query analyzer recommends sending to
 * a master because they contain no SQL hint to force use of a
 * certain server. The recommendation may be overruled in the following.
 * It is not guaranteed whether the statement will be executed on a slave
 * or not. This is how often the internal is_select
 * function has guessed that a master shall be used. Please, see also the
 * user space function mysqlnd_ms_query_is_select.
 * Since 1.1.0.
 * use_slave_sql_hint
 * Number of statements sent to a slave because statement begins with
 * the SQL hint to force use of slave.
 * Since 1.0.0.
 * use_master_sql_hint
 * Number of statements sent to a master because statement begins with
 * the SQL hint to force use of master.
 * Since 1.0.0.
 * use_last_used_sql_hint
 * Number of statements sent to server which has run the previous statement,
 * because statement begins with the SQL hint to force use of previously
 * used server.
 * Since 1.0.0.
 * use_slave_callback
 * Number of statements sent to a slave because an user-defined callback
 * has chosen a slave server for statement execution.
 * Since 1.0.0.
 * use_master_callback
 * Number of statements sent to a master because an user-defined callback
 * has chosen a master server for statement execution.
 * Since 1.0.0.
 * non_lazy_connections_slave_success
 * Number of successfully opened slave connections from
 * configurations not using
 * lazy connections.
 * The total number of successfully opened slave connections
 * is non_lazy_connections_slave_success +
 * lazy_connections_slave_success
 * Since 1.0.0.
 * non_lazy_connections_slave_failure
 * Number of failed slave connection attempts from
 * configurations not using
 * lazy connections.
 * The total number of failed slave connection attempts
 * is non_lazy_connections_slave_failure +
 * lazy_connections_slave_failure
 * Since 1.0.0.
 * non_lazy_connections_master_success
 * Number of successfully opened master connections from
 * configurations not using
 * lazy connections.
 * The total number of successfully opened master connections
 * is non_lazy_connections_master_success +
 * lazy_connections_master_success
 * Since 1.0.0.
 * non_lazy_connections_master_failure
 * Number of failed master connection attempts from
 * configurations not using
 * lazy connections.
 * The total number of failed master connection attempts
 * is non_lazy_connections_master_failure +
 * lazy_connections_master_failure
 * Since 1.0.0.
 * lazy_connections_slave_success
 * Number of successfully opened slave connections from
 * configurations using
 * lazy connections.
 * Since 1.0.0.
 * lazy_connections_slave_failure
 * Number of failed slave connection attempts from
 * configurations using
 * lazy connections.
 * Since 1.0.0.
 * lazy_connections_master_success
 * Number of successfully opened master connections from
 * configurations using
 * lazy connections.
 * Since 1.0.0.
 * lazy_connections_master_failure
 * Number of failed master connection attempts from
 * configurations using
 * lazy connections.
 * Since 1.0.0.
 * trx_autocommit_on
 * Number of autocommit mode activations via API calls.
 * This figure may be used to monitor activity related to the plugin configuration
 * setting
 * trx_stickiness.
 * If, for example, you want to know if a certain API call invokes the
 * mysqlnd library function trx_autocommit(),
 * which is a requirement for
 * trx_stickiness,
 * you may call the user API function in question and check if the
 * statistic has changed. The statistic is modified only by the
 * plugins internal subclassed trx_autocommit()
 * method.
 * Since 1.0.0.
 * trx_autocommit_off
 * Number of autocommit mode deactivations via API calls.
 * Since 1.0.0.
 * trx_master_forced
 * Number of statements redirected to the master while
 * trx_stickiness=master
 * and autocommit mode is disabled.
 * Since 1.0.0.
 * gtid_autocommit_injections_success
 * Number of successful SQL injections in autocommit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.
 * gtid_autocommit_injections_failure
 * Number of failed SQL injections in autocommit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.
 * gtid_commit_injections_success
 * Number of successful SQL injections in commit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.
 * gtid_commit_injections_failure
 * Number of failed SQL injections in commit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.
 * gtid_implicit_commit_injections_success
 * Number of successful SQL injections when implicit commit is detected as part
 * of the plugins client-side
 * global transaction id emulation.
 * Implicit commit happens, for example, when autocommit has been turned
 * off, a query is executed and autocommit is enabled again. In that case,
 * the statement will be committed by the server and SQL to maintain is
 * injected before the autocommit is re-enabled. Another sequence
 * causing an implicit commit is begin(),
 * query(), begin(). The second call
 * to begin() will implicitly commit the transaction
 * started by the first call to begin().
 * begin() refers to internal library calls not actual
 * PHP user API calls.
 * Since 1.2.0.
 * gtid_implicit_commit_injections_failure
 * Number of failed SQL injections when implicit commit is detected as part
 * of the plugins client-side
 * global transaction id emulation.
 * Implicit commit happens, for example, when autocommit has been turned
 * off, a query is executed and autocommit is enabled again. In that case,
 * the statement will be committed by the server and SQL to maintain is
 * injected before the autocommit is re-enabled.
 * Since 1.2.0.
 * transient_error_retries
 * How often an operation has been retried when a transient error was
 * detected. See also,
 * transient_error
 * plugin configuration file setting.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_success
 * Number of successful sharding.lookup_servers
 * remote procedure calls to MySQL Fabric.
 * A call is considered successful if the plugin could reach MySQL
 * Fabric and got any reply. The reply itself may or may not be
 * understood by the plugin. Success refers to the network transport
 * only. If the reply was not understood or indicates a valid error condition,
 * fabric_sharding_lookup_servers_xml_failure
 * gets incremented.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_failure
 * Number of failed sharding.lookup_servers
 * remote procedure calls to MySQL Fabric.
 * A remote procedure call is considered failed if there was a
 * network error in connecting to, writing to or reading from
 * MySQL Fabric.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_time_total
 * Time spent connecting to,writing to and reading from MySQL
 * Fabrich during the sharding.lookup_servers
 * remote procedure call. The value is aggregated for all calls. Time is
 * measured in microseconds.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_bytes_total
 * Total number of bytes received from MySQL Fabric in reply to
 * sharding.lookup_servers calls.
 * Since 1.6.0.
 * fabric_sharding_lookup_servers_xml_failure
 * How often a reply from MySQL Fabric to
 * sharding.lookup_servers calls was not understood.
 * Please note, the current experimental implementation does not
 * distinguish between valid errors returned and malformed replies.
 * Since 1.6.0.
 * xa_begin
 * How many XA/distributed transactions have been started
 * using mysqlnd_ms_xa_begin.
 * Since 1.6.0.
 * xa_commit_success
 * How many XA/distributed transactions have been successfully committed
 * using mysqlnd_ms_xa_commit.
 * Since 1.6.0.
 * xa_commit_failure
 * How many XA/distributed transactions failed to commit
 * during mysqlnd_ms_xa_commit.
 * Since 1.6.0.
 * xa_rollback_success
 * How many XA/distributed transactions have been successfully rolled back
 * using mysqlnd_ms_xa_rollback. The figure does
 * not include implict rollbacks performed as a result of
 * mysqlnd_ms_xa_commit failure.
 * Since 1.6.0.
 * xa_rollback_failure
 * How many XA/distributed transactions could not be rolled back.
 * This includes failures of mysqlnd_ms_xa_rollback
 * but also failured during rollback when closing a connection, if
 * rollback_on_close is set. Please, see also
 * xa_rollback_on_close below.
 * Since 1.6.0.
 * xa_participants
 * Total number of participants in any XA transaction started with
 * mysqlnd_ms_xa_begin.
 * Since 1.6.0.
 * xa_rollback_on_close
 * How many XA transactions have been rolled back implicitly when
 * a connection was close and rollback_on_close is set.
 * Depending on your coding policies, this may hint a flaw in your code as
 * you may prefer to explicitly clean up resources.
 * Since 1.6.0.
 * pool_masters_total
 * Number of master servers (connections) in the internal connection pool.
 * Since 1.6.0.
 * pool_slaves_total
 * Number of slave servers (connections) in the internal connection pool.
 * Since 1.6.0.
 * pool_masters_active
 * Number of master servers (connections) from the internal connection pool
 * which are currently used for picking a connection.
 * Since 1.6.0.
 * pool_slaves_active
 * Number of slave servers (connections) from the internal connection pool
 * which are currently used for picking a connection.
 * Since 1.6.0.
 * pool_updates
 * How often the active connection list has been replaced and a
 * new set of master and slave servers had been installed.
 * Since 1.6.0.
 * pool_master_reactivated
 * How often a master connection has been reused after being
 * flushed from the active list.
 * Since 1.6.0.
 * pool_slave_reactivated
 * How often a slave connection has been reused after being
 * flushed from the active list.
 * Since 1.6.0.use_slave
 * The semantics of this statistic has changed between 1.0.1 - 1.1.0.
 * The meaning for version 1.0.1 is as follows.
 * Number of statements considered as read-only by the built-in query analyzer.
 * Neither statements which begin with a SQL hint to force
 * use of slave nor statements directed to a slave by an user-defined
 * callback are included. The total number of statements sent to the slaves is
 * use_slave + use_slave_sql_hint +
 * use_slave_callback.
 * PECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The
 * statistics is now set by the internal load balancing filter. With
 * version 1.1.0 the load balancing filter is always the last in the
 * filter chain, if used. In future versions a load balancing filter may be
 * followed by other filters causing another change in the meaning of
 * the statistic. If, in the future, a load balancing filter is followed
 * by another filter it is no longer guaranteed that the statement, which
 * increments use_slave, will be executed on the slaves.
 * The meaning for version 1.1.0 is as follows. Number of statements
 * sent to the slaves. Statements directed to a slave by the user filter
 * (an user-defined callback) are not included. The latter are counted by
 * use_slave_callback.
 * Since 1.0.0.use_slaveuse_slaveThe semantics of this statistic has changed between 1.0.1 - 1.1.0.
 * The meaning for version 1.0.1 is as follows.
 * Number of statements considered as read-only by the built-in query analyzer.
 * Neither statements which begin with a SQL hint to force
 * use of slave nor statements directed to a slave by an user-defined
 * callback are included. The total number of statements sent to the slaves is
 * use_slave + use_slave_sql_hint +
 * use_slave_callback.
 * PECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The
 * statistics is now set by the internal load balancing filter. With
 * version 1.1.0 the load balancing filter is always the last in the
 * filter chain, if used. In future versions a load balancing filter may be
 * followed by other filters causing another change in the meaning of
 * the statistic. If, in the future, a load balancing filter is followed
 * by another filter it is no longer guaranteed that the statement, which
 * increments use_slave, will be executed on the slaves.
 * The meaning for version 1.1.0 is as follows. Number of statements
 * sent to the slaves. Statements directed to a slave by the user filter
 * (an user-defined callback) are not included. The latter are counted by
 * use_slave_callback.The semantics of this statistic has changed between 1.0.1 - 1.1.0.The meaning for version 1.0.1 is as follows.
 * Number of statements considered as read-only by the built-in query analyzer.
 * Neither statements which begin with a SQL hint to force
 * use of slave nor statements directed to a slave by an user-defined
 * callback are included. The total number of statements sent to the slaves is
 * use_slave + use_slave_sql_hint +
 * use_slave_callback.use_slaveuse_slave_sql_hintuse_slave_callbackPECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The
 * statistics is now set by the internal load balancing filter. With
 * version 1.1.0 the load balancing filter is always the last in the
 * filter chain, if used. In future versions a load balancing filter may be
 * followed by other filters causing another change in the meaning of
 * the statistic. If, in the future, a load balancing filter is followed
 * by another filter it is no longer guaranteed that the statement, which
 * increments use_slave, will be executed on the slaves.use_slaveThe meaning for version 1.1.0 is as follows. Number of statements
 * sent to the slaves. Statements directed to a slave by the user filter
 * (an user-defined callback) are not included. The latter are counted by
 * use_slave_callback.use_slave_callbackSince 1.0.0.use_master
 * The semantics of this statistic has changed between 1.0.1 - 1.1.0.
 * The meaning for version 1.0.1 is as follows.
 * Number of statements not considered as read-only by the built-in query analyzer.
 * Neither statements which begin with a SQL hint to force
 * use of master nor statements directed to a master by an user-defined
 * callback are included. The total number of statements sent to the master is
 * use_master + use_master_sql_hint +
 * use_master_callback.
 * PECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The
 * statictics is now set by the internal load balancing filter. With
 * version 1.1.0 the load balancing filter is always the last in the
 * filter chain, if used. In future versions a load balancing filter may be
 * followed by other filters causing another change in the meaning of
 * the statistic. If, in the future, a load balancing filter is followed
 * by another filter it is no longer guaranteed that the statement, which
 * increments use_master, will be executed on the slaves.
 * The meaning for version 1.1.0 is as follows. Number of statements
 * sent to the masters. Statements directed to a master by the user filter
 * (an user-defined callback) are not included. The latter are counted by
 * use_master_callback.
 * Since 1.0.0.use_masteruse_masterThe semantics of this statistic has changed between 1.0.1 - 1.1.0.
 * The meaning for version 1.0.1 is as follows.
 * Number of statements not considered as read-only by the built-in query analyzer.
 * Neither statements which begin with a SQL hint to force
 * use of master nor statements directed to a master by an user-defined
 * callback are included. The total number of statements sent to the master is
 * use_master + use_master_sql_hint +
 * use_master_callback.
 * PECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The
 * statictics is now set by the internal load balancing filter. With
 * version 1.1.0 the load balancing filter is always the last in the
 * filter chain, if used. In future versions a load balancing filter may be
 * followed by other filters causing another change in the meaning of
 * the statistic. If, in the future, a load balancing filter is followed
 * by another filter it is no longer guaranteed that the statement, which
 * increments use_master, will be executed on the slaves.
 * The meaning for version 1.1.0 is as follows. Number of statements
 * sent to the masters. Statements directed to a master by the user filter
 * (an user-defined callback) are not included. The latter are counted by
 * use_master_callback.The semantics of this statistic has changed between 1.0.1 - 1.1.0.The meaning for version 1.0.1 is as follows.
 * Number of statements not considered as read-only by the built-in query analyzer.
 * Neither statements which begin with a SQL hint to force
 * use of master nor statements directed to a master by an user-defined
 * callback are included. The total number of statements sent to the master is
 * use_master + use_master_sql_hint +
 * use_master_callback.use_masteruse_master_sql_hintuse_master_callbackPECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The
 * statictics is now set by the internal load balancing filter. With
 * version 1.1.0 the load balancing filter is always the last in the
 * filter chain, if used. In future versions a load balancing filter may be
 * followed by other filters causing another change in the meaning of
 * the statistic. If, in the future, a load balancing filter is followed
 * by another filter it is no longer guaranteed that the statement, which
 * increments use_master, will be executed on the slaves.use_masterThe meaning for version 1.1.0 is as follows. Number of statements
 * sent to the masters. Statements directed to a master by the user filter
 * (an user-defined callback) are not included. The latter are counted by
 * use_master_callback.use_master_callbackSince 1.0.0.use_slave_guess
 * Number of statements the built-in query analyzer recommends sending to
 * a slave because they contain no SQL hint to force use of a
 * certain server. The recommendation may be overruled in the following.
 * It is not guaranteed whether the statement will be executed on a slave
 * or not. This is how often the internal is_select
 * function has guessed that a slave shall be used. Please, see also the
 * user space function mysqlnd_ms_query_is_select.
 * Since 1.1.0.use_slave_guessuse_slave_guessNumber of statements the built-in query analyzer recommends sending to
 * a slave because they contain no SQL hint to force use of a
 * certain server. The recommendation may be overruled in the following.
 * It is not guaranteed whether the statement will be executed on a slave
 * or not. This is how often the internal is_select
 * function has guessed that a slave shall be used. Please, see also the
 * user space function mysqlnd_ms_query_is_select.is_selectmysqlnd_ms_query_is_selectSince 1.1.0.use_master_guess
 * Number of statements the built-in query analyzer recommends sending to
 * a master because they contain no SQL hint to force use of a
 * certain server. The recommendation may be overruled in the following.
 * It is not guaranteed whether the statement will be executed on a slave
 * or not. This is how often the internal is_select
 * function has guessed that a master shall be used. Please, see also the
 * user space function mysqlnd_ms_query_is_select.
 * Since 1.1.0.use_master_guessuse_master_guessNumber of statements the built-in query analyzer recommends sending to
 * a master because they contain no SQL hint to force use of a
 * certain server. The recommendation may be overruled in the following.
 * It is not guaranteed whether the statement will be executed on a slave
 * or not. This is how often the internal is_select
 * function has guessed that a master shall be used. Please, see also the
 * user space function mysqlnd_ms_query_is_select.is_selectmysqlnd_ms_query_is_selectSince 1.1.0.use_slave_sql_hint
 * Number of statements sent to a slave because statement begins with
 * the SQL hint to force use of slave.
 * Since 1.0.0.use_slave_sql_hintuse_slave_sql_hintNumber of statements sent to a slave because statement begins with
 * the SQL hint to force use of slave.Since 1.0.0.use_master_sql_hint
 * Number of statements sent to a master because statement begins with
 * the SQL hint to force use of master.
 * Since 1.0.0.use_master_sql_hintuse_master_sql_hintNumber of statements sent to a master because statement begins with
 * the SQL hint to force use of master.Since 1.0.0.use_last_used_sql_hint
 * Number of statements sent to server which has run the previous statement,
 * because statement begins with the SQL hint to force use of previously
 * used server.
 * Since 1.0.0.use_last_used_sql_hintuse_last_used_sql_hintNumber of statements sent to server which has run the previous statement,
 * because statement begins with the SQL hint to force use of previously
 * used server.Since 1.0.0.use_slave_callback
 * Number of statements sent to a slave because an user-defined callback
 * has chosen a slave server for statement execution.
 * Since 1.0.0.use_slave_callbackuse_slave_callbackNumber of statements sent to a slave because an user-defined callback
 * has chosen a slave server for statement execution.Since 1.0.0.use_master_callback
 * Number of statements sent to a master because an user-defined callback
 * has chosen a master server for statement execution.
 * Since 1.0.0.use_master_callbackuse_master_callbackNumber of statements sent to a master because an user-defined callback
 * has chosen a master server for statement execution.Since 1.0.0.non_lazy_connections_slave_success
 * Number of successfully opened slave connections from
 * configurations not using
 * lazy connections.
 * The total number of successfully opened slave connections
 * is non_lazy_connections_slave_success +
 * lazy_connections_slave_success
 * Since 1.0.0.non_lazy_connections_slave_successnon_lazy_connections_slave_successNumber of successfully opened slave connections from
 * configurations not using
 * lazy connections.
 * The total number of successfully opened slave connections
 * is non_lazy_connections_slave_success +
 * lazy_connections_slave_successlazy connectionslazy connectionsnon_lazy_connections_slave_successlazy_connections_slave_successSince 1.0.0.non_lazy_connections_slave_failure
 * Number of failed slave connection attempts from
 * configurations not using
 * lazy connections.
 * The total number of failed slave connection attempts
 * is non_lazy_connections_slave_failure +
 * lazy_connections_slave_failure
 * Since 1.0.0.non_lazy_connections_slave_failurenon_lazy_connections_slave_failureNumber of failed slave connection attempts from
 * configurations not using
 * lazy connections.
 * The total number of failed slave connection attempts
 * is non_lazy_connections_slave_failure +
 * lazy_connections_slave_failurelazy connectionslazy connectionsnon_lazy_connections_slave_failurelazy_connections_slave_failureSince 1.0.0.non_lazy_connections_master_success
 * Number of successfully opened master connections from
 * configurations not using
 * lazy connections.
 * The total number of successfully opened master connections
 * is non_lazy_connections_master_success +
 * lazy_connections_master_success
 * Since 1.0.0.non_lazy_connections_master_successnon_lazy_connections_master_successNumber of successfully opened master connections from
 * configurations not using
 * lazy connections.
 * The total number of successfully opened master connections
 * is non_lazy_connections_master_success +
 * lazy_connections_master_successlazy connectionslazy connectionsnon_lazy_connections_master_successlazy_connections_master_successSince 1.0.0.non_lazy_connections_master_failure
 * Number of failed master connection attempts from
 * configurations not using
 * lazy connections.
 * The total number of failed master connection attempts
 * is non_lazy_connections_master_failure +
 * lazy_connections_master_failure
 * Since 1.0.0.non_lazy_connections_master_failurenon_lazy_connections_master_failureNumber of failed master connection attempts from
 * configurations not using
 * lazy connections.
 * The total number of failed master connection attempts
 * is non_lazy_connections_master_failure +
 * lazy_connections_master_failurelazy connectionslazy connectionsnon_lazy_connections_master_failurelazy_connections_master_failureSince 1.0.0.lazy_connections_slave_success
 * Number of successfully opened slave connections from
 * configurations using
 * lazy connections.
 * Since 1.0.0.lazy_connections_slave_successlazy_connections_slave_successNumber of successfully opened slave connections from
 * configurations using
 * lazy connections.lazy connectionslazy connectionsSince 1.0.0.lazy_connections_slave_failure
 * Number of failed slave connection attempts from
 * configurations using
 * lazy connections.
 * Since 1.0.0.lazy_connections_slave_failurelazy_connections_slave_failureNumber of failed slave connection attempts from
 * configurations using
 * lazy connections.lazy connectionslazy connectionsSince 1.0.0.lazy_connections_master_success
 * Number of successfully opened master connections from
 * configurations using
 * lazy connections.
 * Since 1.0.0.lazy_connections_master_successlazy_connections_master_successNumber of successfully opened master connections from
 * configurations using
 * lazy connections.lazy connectionslazy connectionsSince 1.0.0.lazy_connections_master_failure
 * Number of failed master connection attempts from
 * configurations using
 * lazy connections.
 * Since 1.0.0.lazy_connections_master_failurelazy_connections_master_failureNumber of failed master connection attempts from
 * configurations using
 * lazy connections.lazy connectionslazy connectionsSince 1.0.0.trx_autocommit_on
 * Number of autocommit mode activations via API calls.
 * This figure may be used to monitor activity related to the plugin configuration
 * setting
 * trx_stickiness.
 * If, for example, you want to know if a certain API call invokes the
 * mysqlnd library function trx_autocommit(),
 * which is a requirement for
 * trx_stickiness,
 * you may call the user API function in question and check if the
 * statistic has changed. The statistic is modified only by the
 * plugins internal subclassed trx_autocommit()
 * method.
 * Since 1.0.0.trx_autocommit_ontrx_autocommit_onNumber of autocommit mode activations via API calls.
 * This figure may be used to monitor activity related to the plugin configuration
 * setting
 * trx_stickiness.
 * If, for example, you want to know if a certain API call invokes the
 * mysqlnd library function trx_autocommit(),
 * which is a requirement for
 * trx_stickiness,
 * you may call the user API function in question and check if the
 * statistic has changed. The statistic is modified only by the
 * plugins internal subclassed trx_autocommit()
 * method.autocommittrx_stickinesstrx_stickinessmysqlndtrx_autocommit()trx_stickinesstrx_stickinesstrx_autocommit()Since 1.0.0.trx_autocommit_off
 * Number of autocommit mode deactivations via API calls.
 * Since 1.0.0.trx_autocommit_offtrx_autocommit_offNumber of autocommit mode deactivations via API calls.autocommitSince 1.0.0.trx_master_forced
 * Number of statements redirected to the master while
 * trx_stickiness=master
 * and autocommit mode is disabled.
 * Since 1.0.0.trx_master_forcedtrx_master_forcedNumber of statements redirected to the master while
 * trx_stickiness=master
 * and autocommit mode is disabled.trx_stickiness=mastertrx_stickiness=masterautocommitSince 1.0.0.gtid_autocommit_injections_success
 * Number of successful SQL injections in autocommit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.gtid_autocommit_injections_successgtid_autocommit_injections_successNumber of successful SQL injections in autocommit mode as part
 * of the plugins client-side
 * global transaction id emulation.global transaction id emulationSince 1.2.0.gtid_autocommit_injections_failure
 * Number of failed SQL injections in autocommit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.gtid_autocommit_injections_failuregtid_autocommit_injections_failureNumber of failed SQL injections in autocommit mode as part
 * of the plugins client-side
 * global transaction id emulation.global transaction id emulationSince 1.2.0.gtid_commit_injections_success
 * Number of successful SQL injections in commit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.gtid_commit_injections_successgtid_commit_injections_successNumber of successful SQL injections in commit mode as part
 * of the plugins client-side
 * global transaction id emulation.global transaction id emulationSince 1.2.0.gtid_commit_injections_failure
 * Number of failed SQL injections in commit mode as part
 * of the plugins client-side
 * global transaction id emulation.
 * Since 1.2.0.gtid_commit_injections_failuregtid_commit_injections_failureNumber of failed SQL injections in commit mode as part
 * of the plugins client-side
 * global transaction id emulation.global transaction id emulationSince 1.2.0.gtid_implicit_commit_injections_success
 * Number of successful SQL injections when implicit commit is detected as part
 * of the plugins client-side
 * global transaction id emulation.
 * Implicit commit happens, for example, when autocommit has been turned
 * off, a query is executed and autocommit is enabled again. In that case,
 * the statement will be committed by the server and SQL to maintain is
 * injected before the autocommit is re-enabled. Another sequence
 * causing an implicit commit is begin(),
 * query(), begin(). The second call
 * to begin() will implicitly commit the transaction
 * started by the first call to begin().
 * begin() refers to internal library calls not actual
 * PHP user API calls.
 * Since 1.2.0.gtid_implicit_commit_injections_successgtid_implicit_commit_injections_successNumber of successful SQL injections when implicit commit is detected as part
 * of the plugins client-side
 * global transaction id emulation.
 * Implicit commit happens, for example, when autocommit has been turned
 * off, a query is executed and autocommit is enabled again. In that case,
 * the statement will be committed by the server and SQL to maintain is
 * injected before the autocommit is re-enabled. Another sequence
 * causing an implicit commit is begin(),
 * query(), begin(). The second call
 * to begin() will implicitly commit the transaction
 * started by the first call to begin().
 * begin() refers to internal library calls not actual
 * PHP user API calls.global transaction id emulationbegin()query()begin()begin()begin()begin()Since 1.2.0.gtid_implicit_commit_injections_failure
 * Number of failed SQL injections when implicit commit is detected as part
 * of the plugins client-side
 * global transaction id emulation.
 * Implicit commit happens, for example, when autocommit has been turned
 * off, a query is executed and autocommit is enabled again. In that case,
 * the statement will be committed by the server and SQL to maintain is
 * injected before the autocommit is re-enabled.
 * Since 1.2.0.gtid_implicit_commit_injections_failuregtid_implicit_commit_injections_failureNumber of failed SQL injections when implicit commit is detected as part
 * of the plugins client-side
 * global transaction id emulation.
 * Implicit commit happens, for example, when autocommit has been turned
 * off, a query is executed and autocommit is enabled again. In that case,
 * the statement will be committed by the server and SQL to maintain is
 * injected before the autocommit is re-enabled.global transaction id emulationSince 1.2.0.transient_error_retries
 * How often an operation has been retried when a transient error was
 * detected. See also,
 * transient_error
 * plugin configuration file setting.
 * Since 1.6.0.transient_error_retriestransient_error_retriesHow often an operation has been retried when a transient error was
 * detected. See also,
 * transient_error
 * plugin configuration file setting.transient_errortransient_errorSince 1.6.0.fabric_sharding_lookup_servers_success
 * Number of successful sharding.lookup_servers
 * remote procedure calls to MySQL Fabric.
 * A call is considered successful if the plugin could reach MySQL
 * Fabric and got any reply. The reply itself may or may not be
 * understood by the plugin. Success refers to the network transport
 * only. If the reply was not understood or indicates a valid error condition,
 * fabric_sharding_lookup_servers_xml_failure
 * gets incremented.
 * Since 1.6.0.fabric_sharding_lookup_servers_successfabric_sharding_lookup_servers_successNumber of successful sharding.lookup_servers
 * remote procedure calls to MySQL Fabric.
 * A call is considered successful if the plugin could reach MySQL
 * Fabric and got any reply. The reply itself may or may not be
 * understood by the plugin. Success refers to the network transport
 * only. If the reply was not understood or indicates a valid error condition,
 * fabric_sharding_lookup_servers_xml_failure
 * gets incremented.sharding.lookup_serversfabric_sharding_lookup_servers_xml_failureSince 1.6.0.fabric_sharding_lookup_servers_failure
 * Number of failed sharding.lookup_servers
 * remote procedure calls to MySQL Fabric.
 * A remote procedure call is considered failed if there was a
 * network error in connecting to, writing to or reading from
 * MySQL Fabric.
 * Since 1.6.0.fabric_sharding_lookup_servers_failurefabric_sharding_lookup_servers_failureNumber of failed sharding.lookup_servers
 * remote procedure calls to MySQL Fabric.
 * A remote procedure call is considered failed if there was a
 * network error in connecting to, writing to or reading from
 * MySQL Fabric.sharding.lookup_serversSince 1.6.0.fabric_sharding_lookup_servers_time_total
 * Time spent connecting to,writing to and reading from MySQL
 * Fabrich during the sharding.lookup_servers
 * remote procedure call. The value is aggregated for all calls. Time is
 * measured in microseconds.
 * Since 1.6.0.fabric_sharding_lookup_servers_time_totalfabric_sharding_lookup_servers_time_totalTime spent connecting to,writing to and reading from MySQL
 * Fabrich during the sharding.lookup_servers
 * remote procedure call. The value is aggregated for all calls. Time is
 * measured in microseconds.sharding.lookup_serversSince 1.6.0.fabric_sharding_lookup_servers_bytes_total
 * Total number of bytes received from MySQL Fabric in reply to
 * sharding.lookup_servers calls.
 * Since 1.6.0.fabric_sharding_lookup_servers_bytes_totalfabric_sharding_lookup_servers_bytes_totalTotal number of bytes received from MySQL Fabric in reply to
 * sharding.lookup_servers calls.sharding.lookup_serversSince 1.6.0.fabric_sharding_lookup_servers_xml_failure
 * How often a reply from MySQL Fabric to
 * sharding.lookup_servers calls was not understood.
 * Please note, the current experimental implementation does not
 * distinguish between valid errors returned and malformed replies.
 * Since 1.6.0.fabric_sharding_lookup_servers_xml_failurefabric_sharding_lookup_servers_xml_failureHow often a reply from MySQL Fabric to
 * sharding.lookup_servers calls was not understood.
 * Please note, the current experimental implementation does not
 * distinguish between valid errors returned and malformed replies.sharding.lookup_serversSince 1.6.0.xa_begin
 * How many XA/distributed transactions have been started
 * using mysqlnd_ms_xa_begin.
 * Since 1.6.0.xa_beginxa_beginHow many XA/distributed transactions have been started
 * using mysqlnd_ms_xa_begin.mysqlnd_ms_xa_beginSince 1.6.0.xa_commit_success
 * How many XA/distributed transactions have been successfully committed
 * using mysqlnd_ms_xa_commit.
 * Since 1.6.0.xa_commit_successxa_commit_successHow many XA/distributed transactions have been successfully committed
 * using mysqlnd_ms_xa_commit.mysqlnd_ms_xa_commitSince 1.6.0.xa_commit_failure
 * How many XA/distributed transactions failed to commit
 * during mysqlnd_ms_xa_commit.
 * Since 1.6.0.xa_commit_failurexa_commit_failureHow many XA/distributed transactions failed to commit
 * during mysqlnd_ms_xa_commit.mysqlnd_ms_xa_commitSince 1.6.0.xa_rollback_success
 * How many XA/distributed transactions have been successfully rolled back
 * using mysqlnd_ms_xa_rollback. The figure does
 * not include implict rollbacks performed as a result of
 * mysqlnd_ms_xa_commit failure.
 * Since 1.6.0.xa_rollback_successxa_rollback_successHow many XA/distributed transactions have been successfully rolled back
 * using mysqlnd_ms_xa_rollback. The figure does
 * not include implict rollbacks performed as a result of
 * mysqlnd_ms_xa_commit failure.mysqlnd_ms_xa_rollbackmysqlnd_ms_xa_commitSince 1.6.0.xa_rollback_failure
 * How many XA/distributed transactions could not be rolled back.
 * This includes failures of mysqlnd_ms_xa_rollback
 * but also failured during rollback when closing a connection, if
 * rollback_on_close is set. Please, see also
 * xa_rollback_on_close below.
 * Since 1.6.0.xa_rollback_failurexa_rollback_failureHow many XA/distributed transactions could not be rolled back.
 * This includes failures of mysqlnd_ms_xa_rollback
 * but also failured during rollback when closing a connection, if
 * rollback_on_close is set. Please, see also
 * xa_rollback_on_close below.mysqlnd_ms_xa_rollbackrollback_on_closexa_rollback_on_closeSince 1.6.0.xa_participants
 * Total number of participants in any XA transaction started with
 * mysqlnd_ms_xa_begin.
 * Since 1.6.0.xa_participantsxa_participantsTotal number of participants in any XA transaction started with
 * mysqlnd_ms_xa_begin.mysqlnd_ms_xa_beginSince 1.6.0.xa_rollback_on_close
 * How many XA transactions have been rolled back implicitly when
 * a connection was close and rollback_on_close is set.
 * Depending on your coding policies, this may hint a flaw in your code as
 * you may prefer to explicitly clean up resources.
 * Since 1.6.0.xa_rollback_on_closexa_rollback_on_closeHow many XA transactions have been rolled back implicitly when
 * a connection was close and rollback_on_close is set.
 * Depending on your coding policies, this may hint a flaw in your code as
 * you may prefer to explicitly clean up resources.rollback_on_closeSince 1.6.0.pool_masters_total
 * Number of master servers (connections) in the internal connection pool.
 * Since 1.6.0.pool_masters_totalpool_masters_totalNumber of master servers (connections) in the internal connection pool.Since 1.6.0.pool_slaves_total
 * Number of slave servers (connections) in the internal connection pool.
 * Since 1.6.0.pool_slaves_totalpool_slaves_totalNumber of slave servers (connections) in the internal connection pool.Since 1.6.0.pool_masters_active
 * Number of master servers (connections) from the internal connection pool
 * which are currently used for picking a connection.
 * Since 1.6.0.pool_masters_activepool_masters_activeNumber of master servers (connections) from the internal connection pool
 * which are currently used for picking a connection.Since 1.6.0.pool_slaves_active
 * Number of slave servers (connections) from the internal connection pool
 * which are currently used for picking a connection.
 * Since 1.6.0.pool_slaves_activepool_slaves_activeNumber of slave servers (connections) from the internal connection pool
 * which are currently used for picking a connection.Since 1.6.0.pool_updates
 * How often the active connection list has been replaced and a
 * new set of master and slave servers had been installed.
 * Since 1.6.0.pool_updatespool_updatesHow often the active connection list has been replaced and a
 * new set of master and slave servers had been installed.Since 1.6.0.pool_master_reactivated
 * How often a master connection has been reused after being
 * flushed from the active list.
 * Since 1.6.0.pool_master_reactivatedpool_master_reactivatedHow often a master connection has been reused after being
 * flushed from the active list.Since 1.6.0.pool_slave_reactivated
 * How often a slave connection has been reused after being
 * flushed from the active list.
 * Since 1.6.0.pool_slave_reactivatedpool_slave_reactivatedHow often a slave connection has been reused after being
 * flushed from the active list.Since 1.6.0.
 */
function mysqlnd_ms_get_stats() {}