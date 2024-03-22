-- Inserting sample data into the user table
INSERT INTO users (username, password) VALUES
('john_doe', 'password123'),
('alice_smith', 'securepass'),
('emma_jones', 'p@ssw0rd');

-- You can add more rows as needed


-- Inserting sample data into the ticket table
INSERT INTO ticket (navn, epost, beskrivelse, userID) VALUES
('John Doe', 'john@example.com', 'Issue with login', 4),
('Alice Smith', 'alice@example.com', 'Error with payment processing', 5),
('Emma Jones', 'emma@example.com', 'Unable to access account settings', 6);
