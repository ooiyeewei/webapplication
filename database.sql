create database movie_library;
use movie_library;

create table movies (
	id INT(5) NOT NULL AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL,
	genre VARCHAR(100) NOT NULL,
	years INT(4) NOT NULL,
	image VARCHAR(100) NOT NULL,
	synopsis VARCHAR(255) NOT NULL,
	PRIMARY KEY(id)
);

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Logan', 'Superhero', 2017, '/assignment/images/logan.jpg',
'The story follows an aged Wolverine and an extremely ill Professor X defending a young mutant named Laura from the villainous Reavers
and Alkali-Transigen led by Donald Pierce and Zander Rice, respectively.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Blade Runner 2049', 'Science Fiction', 2017, '/assignment/images/bladerunner2049.jpg',
'Set thirty years after the first film, Gosling plays K, a blade runner who uncovers a secret that threatens to instigate a war between
humans and replicants.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Zootopia', 'Comedy', 2016, '/assignment/images/zootopia.jpg',
'It details the unlikely partnership between a rabbit police officer and a red fox con artist, as they uncover a conspiracy involving
the disappearance of savage predator inhabitants of a mammalian metropolis.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Happy Death Day', 'Horror', 2017, '/assignment/images/happydeathday.jpg',
'It follows a college student who is murdered on her birthday and begins reliving the day over and over again; at that point, she sets
out to find the killer and stop her death.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('The Theory Of Everything', 'Romance', 2014, '/assignment/images/thetheoryofeverything.jpg',
'The story deals with Jane Hawking relationship with her ex-husband, theoretical physicist Stephen Hawking, his diagnosis of amyotrophic lateral sclerosis
(ALS, also known as Lou Gehrig disease or motor neurone disease), and his success in physics.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Dunkirk', 'War', 2017, '/assignment/images/dunkirk.jpg',
'The movie depicts the Dunkirk evacuation of World War II.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Train To Busan', 'Thriller', 2016, '/assignment/images/traintobusan.jpg',
'The film takes place on a train to Busan, as a zombie apocalypse suddenly breaks out in the country and compromises the safety of the passengers.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Black Panther', 'Superhero', 2018, '/assignment/images/blackpanther.jpg',
'In Black Panther, T Challa returns home as king of Wakanda but finds his sovereignty challenged by a new adversary, in a conflict with global consequences.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Split', 'Thriller', 2016, '/assignment/images/split.jpg',
'The film follows a man with 23 different personalities who kidnaps and imprisons three teenage girls in an isolated underground facility.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('The Fault In Our Stars', 'Romance', 2014, '/assignment/images/thefaultinourstars.jpg',
'The film shows a sixteen-year-old cancer patient who is forced by her parents to attend a support group, where she meets and subsequently falls in love with
Augustus Waters, another cancer patient.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Jumanji: Welcome to The Jungle', 'Comedy', 2017, '/assignment/images/jumanji2.jpg',
'Set twenty-one years after the first film, the plot follows four teenagers who are transported into the video game world of Jumanji, playing as the characters
they chose and overcome the game magical power in order to win and return home.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Pitch Perfect 2', 'Comedy', 2015, '/assignment/images/pitchperfect2.jpg',
'The film centers on the fictional Barden University Bellas, an all-female a cappella singing group, who try to beat out the German national team in a world
singing championship.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Creed', 'Action', 2015, '/assignment/images/creed.jpg',
'Adonis Creed seeks out Rocky Balboa and asks the retired champ to be his trainer.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Edge Of Tomorrow', 'Science Fiction', 2014, '/assignment/images/edgeoftomorrow.jpg',
'The film takes place in a future where Earth is invaded by an alien race. Major William Cage a public relations officer with no combat experience,
is forced by his superiors to join a landing operation against the aliens.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Maleficent', 'Fantasy', 2014, '/assignment/images/maleficent.jpg',
'The film takes place in a future where Earth is invaded by an alien race. Major William Cage a public relations officer with no combat experience,
is forced by his superiors to join a landing operation against the aliens.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Dracula Untold', 'Fantasy', 2014, '/assignment/images/draculauntold.jpg',
'The film creates an origin story for its title character, Count Dracula.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Jason Bourne', 'Action', 2016, '/assignment/images/jasonbourne.jpg',
'In the film, a disillusioned genius inventor and a teenage science enthusiast embark to an ambiguous alternate dimension known as "Tomorrowland", where
their actions directly affect their own world.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('La La Land', 'Romance', 2016, '/assignment/images/lalaland.jpeg',
'It shows a jazz pianist and an aspiring actress, who meet and fall in love in Los Angeles while pursuing their dreams. The
title refers simultaneously to the city of Los Angeles and the idiom for being out of touch with reality.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Doctor Strange', 'Superhero', 2016, '/assignment/images/doctorstrange.jpg',
'In Doctor Strange, surgeon Strange learns the mystic arts after a career-ending car accident.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Blackhat', 'Thriller', 2015, '/assignment/images/blackhat.jpg',
'Convicted hacker Nick Hathaway be released from prison to help with the investigation. As Nick and his comrades chase their quarry, it
becomes evident that the hackers have a sinister motive for their actions.');

INSERT INTO movies (title, genre, years, image, synopsis)
VALUES ('Maze Runner 3', 'Science Fiction', 2018, '/assignment/images/mazerunner.jpg',
'Thomas leads some escaped Gladers on their final and most dangerous mission yet. To save their friends, they must break into the legendary Last City,
a WCKD-controlled labyrinth that may turn out to be the deadliest maze of all.');

create table users (
	username VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL,
	PRIMARY KEY(username)
);

INSERT INTO users (username, password) VALUES ('admin123', 'admin123');
INSERT INTO users (username, password) VALUES ('admin456', 'admin456');
