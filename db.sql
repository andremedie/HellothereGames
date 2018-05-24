CREATE DATABASE quiz;
USE quiz;

CREATE TABLE question(
	question_id int(8) PRIMARY KEY AUTO_INCREMENT,
	question_status enum("NOT STARTED","RUNNING","COMPLETE") default "NOT STARTED",
	question_text text
);

CREATE TABLE alternative(
	alternative_id int(8) PRIMARY KEY AUTO_INCREMENT,
	alternative_question int(8),
	alternative_text text,
	alternative_correct tinyint(1),
	FOREIGN KEY (alternative_question) REFERENCES question(question_id)
);

INSERT INTO question (question_text) VALUES
("Where does Santa come from?"),
("What is 5+5?"),
("What year is it?"),
("Fråga 4"),
("Fråga 5"),
("Fråga 6"),
("Fråga 7"),
("Fråga 8"),
("Fråga 9"),
("Fråga 10"),
("Fråga 11"),
("Fråga 12"),
("Fråga 13"),
("Fråga 14"),
("Fråga 15"),
("Fråga 16");


INSERT INTO alternative (alternative_question,alternative_text,alternative_correct) VALUES
(1,"Finland",1),
(1,"Russia",0),
(1,"Africa",0),

(2,"25",0),
(2,"10",1),
(2,"55",0),

(3,"8102",0),
(3,"2118",0),
(3,"2018",1),

(4,"Alternativ1",1),
(4,"Alternativ2",0),
(4,"Alternativ3",0),

(5,"Alternativ1",1),
(5,"Alternativ2",0),
(5,"Alternativ3",0),

(6,"Alternativ1",1),
(6,"Alternativ2",0),
(6,"Alternativ3",0),

(7,"Alternativ1",1),
(7,"Alternativ2",0),
(7,"Alternativ3",0),

(8,"Alternativ1",1),
(8,"Alternativ2",0),
(8,"Alternativ3",0),

(9,"Alternativ1",1),
(9,"Alternativ2",0),
(9,"Alternativ3",0),

(10,"Alternativ1",1),
(10,"Alternativ2",0),
(10,"Alternativ3",0),

(11,"Alternativ1",1),
(11,"Alternativ2",0),
(11,"Alternativ3",0),

(12,"Alternativ1",1),
(12,"Alternativ2",0),
(12,"Alternativ3",0),

(13,"Alternativ1",1),
(13,"Alternativ2",0),
(13,"Alternativ3",0),

(14,"Alternativ1",1),
(14,"Alternativ2",0),
(14,"Alternativ3",0),

(15,"Alternativ1",1),
(15,"Alternativ2",0),
(15,"Alternativ3",0),

(16,"Alternativ1",1),
(16,"Alternativ2",0),
(16,"Alternativ3",0);


