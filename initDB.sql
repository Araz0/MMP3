/*	CREATE DATABASE MMP3	*/
CREATE TYPE degrees AS ENUM ('Master', 'Bachelor');
CREATE TYPE categories AS ENUM ('MMP1', 'MMP2', 'MMP2a', 'MMP2b', 'MMP3');
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
  hero VARCHAR(255) NOT NULL,
  members VARCHAR(255) NOT NULL,
  degree VARCHAR(10) NOT NULL,
  category VARCHAR(10) NOT NULL,
  tags VARCHAR(255) NOT NULL,
  links VARCHAR(255) NOT NULL,
  location VARCHAR(255) NOT NULL,
  user_id INTEGER REFERENCES users(id) ON DELETE CASCADE
);
CREATE TABLE maps(
  ID serial PRIMARY KEY NOT NULL,
  project_id INTEGER REFERENCES projects(id) ON DELETE CASCADE
);



/*   Seeding   */

INSERT INTO users VALUES (1, 'aro', 'root', current_timestamp );