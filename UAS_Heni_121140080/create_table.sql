-- Active: 1702848241238@@127.0.0.1@3306@akademik
CREATE TABLE mahasiswa(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim INT(50) NOT NULL,
    gender ENUM('Laki-Laki', 'Perempuan')NOT NULL,
    kodemk VARCHAR(50) NOT NULL,
    nilai CHAR(2) NOT NULL,
    bobot INT(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;

INSERT INTO mahasiswa VALUES
("123", "Heni" , "121140080", "Perempuan","SI", "A", 3),
("234", "Maruli", "121280064", "Laki-Laki", "Jarkom", "C", 3),
("345", "Artha", "121340135", "Perempuan", "Pemweb", "B", 3),
("456", "Uli", "121430165", "Perempuan", "IB", "A", 4),
("789", "Sebastian", "121260135","Laki-Laki", "SI", "B", 3);