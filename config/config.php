<?php

// ※連線資料庫設定
const SQLPORT_SQL = '3306'; //資料庫port
// const HOSTNAME_SQL = '139.162.15.125'; //資料庫位址
const HOSTNAME_SQL = 'localhost'; //資料庫位址
// const USERNAME_SQL = 'bonus_loan_remote'; //帳號
const USERNAME_SQL = 'bonus_loan_user'; //帳號
const PASSWORD_SQL = '820820'; //密碼
const DATABASE_SQL = 'db_bonus_loan'; //資料庫名稱
const SESSION_TIMEOUT = 86400; //session保留時間(單位秒)

/* ※LINE NITIFY (多組需用逗號隔開)
*   ▼ 範例如下
*   'jgcp1tV0ZT8gVxWlRLJ3oBZLaFNhsIPMQHiwKzCcaf2',
*   'TsBgsiWQMVSOy4l6QCeNfijhJQnYhI9BH9L1bS73x13'
*   ▲ (最後一筆資料後面不用逗號)
*/
const TOKENS = [
    'jt3oo7UcH4YI9xx37cK0dqr14zjqrrp1LEZmpdz2lA4'
    // 'jt3oo7UcH4YI9xx37cK0dqr14zjqrrp1LEZmpdz2lA4',
    // 'tIImuI6WJtHRhYtEd8s7z0XKCAfeHEG9Yk6xcfeicxK',
    // 'jgcp1tV0ZT8gVxWlRLJ3oBZLaFNhsIPMQHiwKzCcaf2',
    'TsBgsiWQMVSOy4l6QCeNfijhJQnYhI9BH9L1bS73x13'
];

?>