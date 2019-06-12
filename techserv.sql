CREATE DATABASE TechServ
-- Create the table in the specified schema

CREATE TABLE UserRequest 
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, -- primary key column
    firstName VARCHAR (50) NOT NULL,
    lastName   VARCHAR(50) NOT NULL,
    email   VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    business VARCHAR (200) NOT NULL,
    comments TEXT NOT NULL
    project VARCHAR(200) NOT NULL,
    -- cCountry VARCHAR 50 NOT NULL
    -- specify more columns here
);

CREATE TABLE UserRegistration
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, -- primary key column
    firstName VARCHAR (50) NOT NULL,
    lastName   VARCHAR (50) NOT NULL,
    email   VARCHAR (50) NOT NULL,
    phone VARCHAR (50) NOT NULL,
    address VARCHAR (50) NOT NULL,
    howDidYouHear VARCHAR (50) NOT NULL,
    course VARCHAR (50) NOT NULL,
    session VARCHAR (50) NOT NULL,
    localGovt VARCHAR (50) NOT NULL,
    state VARCHAR (50) NOT NULL
    -- country VARCHAR 50 NOT NULL
    -- specify more columns here
);


-- correct or verified
CREATE TABLE UserRegistration
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, -- primary key column
    firstName VARCHAR (50) NOT NULL,
    lastName   VARCHAR (50) NOT NULL,
    email   VARCHAR (50) NOT NULL,
    phone VARCHAR (50) NOT NULL,
    address VARCHAR (50) NOT NULL,
    howDidYouHear VARCHAR (50) NOT NULL,
    course VARCHAR (50) NOT NULL,
    session VARCHAR (50) NOT NULL,
    localGovt VARCHAR (50) NOT NULL,
    state VARCHAR (50) NOT NULL
    -- country VARCHAR 50 NOT NULL
    -- specify more columns here
);

-- username:mujaware
-- cpanelpassword: m)B14eKr8c&2Qi1^

-- database name:mujaware_mujaware
-- user:mujaware_muja
-- pass:muja!1025?
