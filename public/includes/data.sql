insert into levels(name, description)
values ('Primary', 'Basic 1 to 6'),
       ('Junior High', 'Basic 7 to 9'),
       ('Senior High', 'Basic 10 to 12');

insert into classes(name, description, level_id)
values ('Basic 1', 'First year of Primary School', 1),
       ('Basic 2', 'Second year of Primary School', 1),
       ('Basic 3', 'Third year of Primary School', 1),
       ('Basic 4', 'Fourth year of Primary School', 1),
       ('Basic 5', 'Fifth year of Primary School', 1),
       ('Basic 6', 'Sixth year of Primary School', 1),
       ('Basic 7', 'First year of Junior High School', 2),
       ('Basic 8', 'Second year of Junior High School', 2),
       ('Basic 9', 'Third year of Junior High School', 2),
       ('Basic 10', 'First year of Senior High School', 3),
       ('Basic 11', 'Second year of Senior High School', 3),
       ('Basic 12', 'Third year of Senior High School', 3);




insert into subjects(name, description, class_id)
values ('Mathematics', 'Study for Basic 7', 7),
       ('English', 'Study for Basic 7', 7),
       ('Science', 'Study for Basic 7', 7),
       ('Social Studies', 'Study for Basic 7', 7),
       ('Computing', 'Study for Basic 7', 7),
       ('Creative Arts & Design', 'Study for Basic 7', 7),
       ('Career Technology', 'Study for Basic 7', 7),
       ('Religious & Moral Education', 'Study for Basic 7', 7),
       ('Mathematics', 'Study for Basic 8', 8),
       ('English', 'Study for Basic 8', 7),
       ('Science', 'Study for Basic 8', 8),
       ('Social Studies', 'Study for Basic 8', 8),
       ('Computing', 'Study for Basic 8', 8),
       ('Creative Arts & Design', 'Study for Basic 8', 8),
       ('Career Technology', 'Study for Basic 8', 8),
       ('Religious & Moral Education', 'Study for Basic 8', 8),
       ('Mathematics', 'Study for Basic 9', 9),
       ('English', 'Study for Basic 9', 9),
       ('Science', 'Study for Basic 9', 9),
       ('Social Studies', 'Study for Basic 9', 9),
       ('Computing', 'Study for Basic 9', 9),
       ('Creative Arts & Design', 'Study for Basic 9', 9),
       ('Career Technology', 'Study for Basic 9', 9),
       ('Religious & Moral Education', 'Study for Basic 9', 9);

insert into strands(name, subject_id)
values ('Strand 1: Introduction to Computers', 5),
       ('Strand 2: Productivity Software', 5),
       ('Strand 3: Communication Networks',  5),
       ('Strand 4: Computational Thinking ', 5),
       ('Strand 1: Introduction to Computers', 13),
       ('Strand 2: Productivity Software', 13),
       ('Strand 3: Communication Networks',  13),
       ('Strand 4: Computational Thinking ', 13),
       ('Strand 1: Strand 1: Introduction to Computers', 21),
       ('Strand 2Productivity Software', 21),
       ('Strand 3: Communication Networks',  21),
       ('Strand 4: Computational Thinking ', 21);


insert into substrands(name, strand_id)
values ('Sub-Strand 1: Components of Computers and Computer Systems', 1),
       ('Technology in The Community', 1),
       ('Health and Safety in the use of ICT Tools', 1),
       ('Introduction to Word Processing ', 2),
       ('Introduction to Presentation', 2),
       ('Introduction to Electronic Spreadsheet ', 2),
       ('Computer Networks', 3),
       ('Internet and Social Media', 3),
       ('Information Security ', 3),
       ('Web Technologies', 3),
       ('Introduction to Programming', 4),
       ('Algorithm', 4),
       ('Robotics', 4),
       ('Artificial Intelligence ', 4),

       ('Components of Computers and Computer Systems ', 5),
       ('Technology in The Community', 5),
       ('Health and Safety in the use of ICT Tools', 5),
       ('Introduction to Word Processing ', 6),
       ('Introduction to Presentation', 6),
       ('Introduction to Desktop Publishing', 6),
       ('Introduction to Electronic Spreadsheet ', 6),
       ('Computer Networks', 7),
       ('Internet and Social Media', 7),
       ('Information Security ', 3),
       ('Web Technologies', 7),
       ('Introduction to Programming', 8),
       ('Algorithm', 8),
       ('Robotics', 8),
       ('Artificial Intelligence ', 8),

       ('Components of Computers and Computer Systems ', 9),
       ('Technology in The Community', 9),
       ('Health and Safety in the use of ICT Tools', 9),
       ('Introduction to Word Processing ', 10),
       ('Introduction to Presentation', 10),
       ('Introduction to Desktop Publishing', 10),
       ('Introduction to Electronic Spreadsheet ', 10),
       ('Computer Networks', 11),
       ('Internet and Social Media', 11),
       ('Information Security ', 11),
       ('Web Technologies', 11),
       ('Introduction to Programming', 8),
       ('Algorithm', 12),
       ('Robotics', 12),
       ('Artificial Intelligence ', 12);



