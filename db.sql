CREATE DATABASE quiz;
USE quiz;


CREATE TABLE quiz(
	quiz_id int(8) PRIMARY KEY AUTO_INCREMENT,
	quiz_name varchar(32)
);


CREATE TABLE question(
	question_id int(8) PRIMARY KEY AUTO_INCREMENT,
	question_quiz int(8),
	question_text text,
	FOREIGN KEY (question_quiz) REFERENCES quiz(quiz_id)
);


CREATE TABLE alternative(
	alternative_question int(8),
	alternative_text text,
	alternative_correct tinyint(1),
	FOREIGN KEY (alternative_question) REFERENCES question(question_id)
);


CREATE TABLE quiz_session(
	quiz_session_id int(8) PRIMARY KEY AUTO_INCREMENT,
	quiz_session_quiz int(8),
	quiz_session_active tinyint(1) UNIQUE null,
	quiz_session_started timestamp DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (quiz_session_quiz) REFERENCES quiz(quiz_id)
);


CREATE TABLE quiz_session_user(
quiz_session_user_id int(8) PRIMARY KEY AUTO_INCREMENT,
quiz_session_user_quiz_session int(8),
quiz_session_user_name varchar(32), 
FOREIGN KEY (quiz_session_user_quiz_session) REFERENCES quiz_session(quiz_session_id)
);


INSERT INTO quiz VALUES
(1, "Quiz 1"),
(2, "Quiz 2"),
(3, "Quiz 3"),
(4, "Quiz 4");

INSERT INTO question (question_id,question_quiz,question_text) VALUES
(1,1,"Fråga 1"),
(2,1,"Fråga 2"),
(3,1,"Fråga 3"),
(4,1,"Fråga 4"),
(5,1,"Fråga 5");


INSERT INTO alternative (alternative_question,alternative_text,alternative_correct) VALUES
(1,"Alternativ 1",0),
(1,"Alternativ 2",1),
(1,"Alternativ 3",0),

(2,"Alternativ 1",1),
(2,"Alternativ 2",0),
(2,"Alternativ 3",0),

(3,"Alternativ 1",1),
(3,"Alternativ 2",0),
(3,"Alternativ 3",0),

(4,"Alternativ 1",1),
(4,"Alternativ 2",0),
(4,"Alternativ 3",0),

(5,"Alternativ 1",1),
(5,"Alternativ 2",0),
(5,"Alternativ 3",0);


