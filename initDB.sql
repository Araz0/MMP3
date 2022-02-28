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
  sufix VARCHAR(255) NOT NULL,
  title VARCHAR(255) NOT NULL,
  subtitle VARCHAR(255) NOT NULL,
  excerpt TEXT NOT NULL,
  description TEXT NOT NULL,
  thumbnail VARCHAR(255) NOT NULL,
  teaser VARCHAR(255) NOT NULL,
  members TEXT NOT NULL,
  degree VARCHAR(25) NOT NULL,
  tags VARCHAR(255) NOT NULL,
  links TEXT NOT NULL,
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
  first_release_date DATE NOT NULL,
  second_release_date NOT NULL,
  departments varchar(255) NOT NULL, /* MMT,MMA,HCI,KMU,HTB,SMB,SMC,ITS,AIS,HTW,BWI,IMT,SOZA,PDM,BMA,HEB,GUK,OTH,ETH,PTH,RET */
  categories varchar(255) NOT NULL, /* MMP1,MMP2,MMP2a,MMP2b,MMP3,Master Project */
);

/*   Seeding   */
INSERT INTO
  users
VALUES
  (1, 'aro', 'root', current_timestamp);