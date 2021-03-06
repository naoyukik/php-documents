/**
 * (PECL mongo >= 1.2.3)<br/>
 * @link http://php.net/manual/en/mongopool.info.php
 * @return array 各接続プールには識別子があり、ホスト名から始まります。
 * 個々の接続プールに対して、この関数は次のフィールドを表示します。
 * in use
 * 現在 Mongo のインスタンスが使っている接続数。
 * in pool
 * 現在プールにある (未使用の) 接続数。
 * remaining
 * このプールで作れる接続数。たとえば、このプールで作れる接続数が 5 つで
 * 現在プール内にある接続数が 3 であるとしましょう。この場合、プールを使い切るまでに
 * MongoClient の新しいインスタンスを 8 つ作れることになります
 * (MongoClient のインスタンスがスコープ外に出て、
 * 接続をプールに返すことはないものとします)。
 * 負の値は、このプールでは無制限に接続を作れることを意味します。
 * プールを作る前には、接続の最大数を
 * Mongo::setPoolSize で変更できます。
 * この関数の出力でいったんプールを表示してしまうと、そのサイズは変更できません。
 * total
 * このプールで使える接続の総数。"in use" + "in pool" (あるいは -1) 以上になります。
 * timeout
 * このプール内の接続のソケットタイムアウト。
 * このプール内の接続がサーバーへの接続を試みるときにどれだけ待つかを決めます。
 * waiting
 * プールのサイズの制限に達すると、プールから接続を要求するワーカーは
 * 他のワーカーが接続を返却するまで待たされます。
 * このフィールドは、ワーカーが接続の解放を待つミリ秒数を表示します。
 * もしこの数値が増え続けるようなら、
 * MongoPool::setSize でプールにより多くの接続を追加するといいでしょう。in use
 * 現在 Mongo のインスタンスが使っている接続数。
 * in pool
 * 現在プールにある (未使用の) 接続数。
 * remaining
 * このプールで作れる接続数。たとえば、このプールで作れる接続数が 5 つで
 * 現在プール内にある接続数が 3 であるとしましょう。この場合、プールを使い切るまでに
 * MongoClient の新しいインスタンスを 8 つ作れることになります
 * (MongoClient のインスタンスがスコープ外に出て、
 * 接続をプールに返すことはないものとします)。
 * 負の値は、このプールでは無制限に接続を作れることを意味します。
 * プールを作る前には、接続の最大数を
 * Mongo::setPoolSize で変更できます。
 * この関数の出力でいったんプールを表示してしまうと、そのサイズは変更できません。
 * total
 * このプールで使える接続の総数。"in use" + "in pool" (あるいは -1) 以上になります。
 * timeout
 * このプール内の接続のソケットタイムアウト。
 * このプール内の接続がサーバーへの接続を試みるときにどれだけ待つかを決めます。
 * waiting
 * プールのサイズの制限に達すると、プールから接続を要求するワーカーは
 * 他のワーカーが接続を返却するまで待たされます。
 * このフィールドは、ワーカーが接続の解放を待つミリ秒数を表示します。
 * もしこの数値が増え続けるようなら、
 * MongoPool::setSize でプールにより多くの接続を追加するといいでしょう。in use
 * 現在 Mongo のインスタンスが使っている接続数。in usein use現在 Mongo のインスタンスが使っている接続数。現在 Mongo のインスタンスが使っている接続数。Mongoin pool
 * 現在プールにある (未使用の) 接続数。in poolin pool現在プールにある (未使用の) 接続数。現在プールにある (未使用の) 接続数。remaining
 * このプールで作れる接続数。たとえば、このプールで作れる接続数が 5 つで
 * 現在プール内にある接続数が 3 であるとしましょう。この場合、プールを使い切るまでに
 * MongoClient の新しいインスタンスを 8 つ作れることになります
 * (MongoClient のインスタンスがスコープ外に出て、
 * 接続をプールに返すことはないものとします)。
 * 負の値は、このプールでは無制限に接続を作れることを意味します。
 * プールを作る前には、接続の最大数を
 * Mongo::setPoolSize で変更できます。
 * この関数の出力でいったんプールを表示してしまうと、そのサイズは変更できません。remainingremainingこのプールで作れる接続数。たとえば、このプールで作れる接続数が 5 つで
 * 現在プール内にある接続数が 3 であるとしましょう。この場合、プールを使い切るまでに
 * MongoClient の新しいインスタンスを 8 つ作れることになります
 * (MongoClient のインスタンスがスコープ外に出て、
 * 接続をプールに返すことはないものとします)。
 * 負の値は、このプールでは無制限に接続を作れることを意味します。
 * プールを作る前には、接続の最大数を
 * Mongo::setPoolSize で変更できます。
 * この関数の出力でいったんプールを表示してしまうと、そのサイズは変更できません。このプールで作れる接続数。たとえば、このプールで作れる接続数が 5 つで
 * 現在プール内にある接続数が 3 であるとしましょう。この場合、プールを使い切るまでに
 * MongoClient の新しいインスタンスを 8 つ作れることになります
 * (MongoClient のインスタンスがスコープ外に出て、
 * 接続をプールに返すことはないものとします)。MongoClientMongoClient負の値は、このプールでは無制限に接続を作れることを意味します。プールを作る前には、接続の最大数を
 * Mongo::setPoolSize で変更できます。
 * この関数の出力でいったんプールを表示してしまうと、そのサイズは変更できません。Mongo::setPoolSizetotal
 * このプールで使える接続の総数。"in use" + "in pool" (あるいは -1) 以上になります。totaltotalこのプールで使える接続の総数。"in use" + "in pool" (あるいは -1) 以上になります。このプールで使える接続の総数。"in use" + "in pool" (あるいは -1) 以上になります。timeout
 * このプール内の接続のソケットタイムアウト。
 * このプール内の接続がサーバーへの接続を試みるときにどれだけ待つかを決めます。timeouttimeoutこのプール内の接続のソケットタイムアウト。
 * このプール内の接続がサーバーへの接続を試みるときにどれだけ待つかを決めます。このプール内の接続のソケットタイムアウト。
 * このプール内の接続がサーバーへの接続を試みるときにどれだけ待つかを決めます。waiting
 * プールのサイズの制限に達すると、プールから接続を要求するワーカーは
 * 他のワーカーが接続を返却するまで待たされます。
 * このフィールドは、ワーカーが接続の解放を待つミリ秒数を表示します。
 * もしこの数値が増え続けるようなら、
 * MongoPool::setSize でプールにより多くの接続を追加するといいでしょう。waitingwaitingプールのサイズの制限に達すると、プールから接続を要求するワーカーは
 * 他のワーカーが接続を返却するまで待たされます。
 * このフィールドは、ワーカーが接続の解放を待つミリ秒数を表示します。
 * もしこの数値が増え続けるようなら、
 * MongoPool::setSize でプールにより多くの接続を追加するといいでしょう。プールのサイズの制限に達すると、プールから接続を要求するワーカーは
 * 他のワーカーが接続を返却するまで待たされます。
 * このフィールドは、ワーカーが接続の解放を待つミリ秒数を表示します。
 * もしこの数値が増え続けるようなら、
 * MongoPool::setSize でプールにより多くの接続を追加するといいでしょう。MongoPool::setSize
 */
function MongoPool.info() {}