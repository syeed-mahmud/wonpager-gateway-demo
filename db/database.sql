CREATE DATABASE  wp_modules;

USE  wp_modules;

CREATE TABLE users (
    user_id BIGINT(20) NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL,
    lic_code VARCHAR(200) NOT NULL,
        PRIMARY KEY (user_id)
);

CREATE TABLE modules (
    module_id BIGINT(20) NOT NULL AUTO_INCREMENT,
    module  VARCHAR(255) NOT NULL,
    lic_code VARCHAR(10) NOT NULL,
        PRIMARY KEY (module_id)
);
 
CREATE TABLE feature_flags (
    feature_id BIGINT(20) NOT NULL AUTO_INCREMENT,
    feature VARCHAR(20) NOT NULL,
    module_id VARCHAR(255) NOT NULL,
    allow_access boolean Default false,
        PRIMARY KEY (feature_id)
);
