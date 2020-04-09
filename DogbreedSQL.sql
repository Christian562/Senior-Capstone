CREATE TABLE DOGBREED (
    breed_Key INT(11) NOT NULL AUTO_INCREMENT,
    name CHAR(20) NOT NULL,
    avgSize CHAR(10) NOT NULL,
    avgGroom CHAR(10) NOT NULL,
    avgEnergy CHAR(10) NOT NULL,
    famFriend CHAR(3) NOT NULL,
    avgLife INT(2) NOT NULL,
    PRIMARY KEY (breed_Key)
);

CREATE TABLE USERS (
	userID INT(11) NOT NULL AUTO_INCREMENT,
    userEmail VARCHAR(25) NOT NULL,
    pass VARCHAR(20) NOT NULL,
    PRIMARY KEY (userID)
);

DROP TABLE DOGBREED;
DROP TABLE USERS;

INSERT INTO DOGBREED (name, avgSize, avgGroom, avgEnergy, famFriend, avgLife)
VALUES ('Labrador Retriever', 'Large', 'Often', 'High', 'Yes', '10');

INSERT INTO DOGBREED (name, avgSize, avgGroom, avgEnergy, famFriend, avgLife)
VALUES ('Boxer', 'Large', 'Infrequent', 'High', 'Yes', '13');

INSERT INTO DOGBREED (name, avgSize, avgGroom, avgEnergy, famFriend, avgLife)
VALUES ('Pug', 'Small', 'Infrequent', 'Low/Medium', 'Yes', '8');

INSERT INTO DOGBREED (name, avgSize, avgGroom, avgEnergy, famFriend, avgLife)
VALUES ('Corgi', 'Medium', 'Often', 'Low', 'Yes', '15');

INSERT INTO DOGBREED (name, avgSize, avgGroom, avgEnergy, famFriend, avgLife)
VALUES ('Pitbull', 'Medium', 'Infrequent', 'High', 'No', '9');

SELECT * FROM DOGBREED;
SELECT * FROM USERS;