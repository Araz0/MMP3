/*	CREATE DATABASE MMP3	*/

CREATE TABLE users(
    ID serial PRIMARY KEY NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    studies VARCHAR(25) NOT NULL,
    role VARCHAR(25) NOT NULL
);

CREATE TABLE projects(
    ID serial PRIMARY KEY NOT NULL,
    sufix VARCHAR(255),
    title VARCHAR(255) NOT NULL,
    subtitle VARCHAR(255),
    excerpt TEXT,
    description TEXT NOT NULL,
    thumbnail VARCHAR(255) NOT NULL,
    teaser VARCHAR(255),
    members TEXT NOT NULL,
    degree VARCHAR(25) NOT NULL,
    category VARCHAR(25) NOT NULL,
    tags VARCHAR(255) NOT NULL,
    links TEXT,
    user_id INTEGER REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE media_blocks (
    ID serial PRIMARY KEY NOT NULL,
    title VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    description TEXT,
    project_id INTEGER REFERENCES projects(id) ON DELETE CASCADE
);

CREATE TABLE configs (
    ID serial PRIMARY KEY NOT NULL,
    first_release_date TIMESTAMP NOT NULL,
    first_release_title VARCHAR(255) NOT NULL,
    second_release_date TIMESTAMP NOT NULL,
    second_release_title VARCHAR(255) NOT NULL
);

CREATE TABLE captchas (
    ID serial PRIMARY KEY NOT NULL,
    title VARCHAR(255) NOT NULL,
    path VARCHAR(255) NOT NULL,
    solution VARCHAR(255) NOT NULL
);

CREATE TABLE tickets (
    ID serial PRIMARY KEY NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    film_block VARCHAR(255) NOT NULL,
    amount INTEGER NOT NULL,
    t_time VARCHAR(255) NOT NULL,
    t_date VARCHAR(255) NOT NULL,
    checked_in BOOLEAN
);

/*
departments varchar(255) NOT NULL, // MMT,MMA,HCI,KMU,HTB,SMB,SMC,ITS,AIS,HTW,BWI,IMT,SOZA,PDM,BMA,HEB,GUK,OTH,ETH,PTH,RET 
  categories varchar(255) NOT NULL, // MMP1,MMP2,MMP2a,MMP2b,MMP3,Master Project 
*/

/*   Seeding   */

INSERT INTO
    users
VALUES
    (
        'fhs41238',
        'aalhamdani.mmt-b2020@fh-salzburg.ac.at',
        'Araz',
        'Al Hamdani',
        'MMT-B 2020',
        'ADMIN'
    );