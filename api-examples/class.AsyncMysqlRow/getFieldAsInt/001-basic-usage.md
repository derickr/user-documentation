The following example shows how to get a field value as an `int` value via `AsyncMysqlRow::getFieldAsInt`. Assume this was the SQL used to create the example table:

```
CREATE TABLE test_table (
userID SMALLINT UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
name VARCHAR(40) NOT NULL,
age SMALLINT NULL,
email VARCHAR(60) NULL,
PRIMARY KEY (userID)
);
```

In this case, we are actually getting a field that is an `int` (or `SMALLINT`).
