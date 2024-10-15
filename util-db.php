$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "justinjacksonmis4013hw3.mysql.database.azure.com", "justinjacksonmis", "DougDoug07&&", "47.217.199.31", 3306, MYSQLI_CLIENT_SSL);
mysqli_real_connect($conn, "justinjacksonmis4013hw3.mysql.database.azure.com", "justinjacksonmis", "DougDoug07&&", "129.15.65.247", 3306, MYSQLI_CLIENT_SSL);
