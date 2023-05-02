CREATE TABLE `Users` (
    `ID` int(15) NOT NULL,
    `Nama` varchar(434) NOT NULL,
    `Alamat` varchar(398) NOT NULL,
    `Jabatan` varchar(423) NOT NULL,
    PRIMARY KEY (`ID`)
);

INSERT INTO Users (ID, Nama, Alamat, Jabatan)
VALUES ('01', 'Alpha', 'Neptunus', 'Admin'),
    ('02', 'Omega', 'Saturnus', 'Office Worker'),
    ('03', 'Sigma', 'Jupiter', 'Manager'),
    ('04', 'Delta', 'Mars', 'President'),
    ('05', 'Beta', 'Bumi', 'Dessparate');