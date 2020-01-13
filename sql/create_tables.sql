
CREATE TABLE Jugadores
(
    JugadorId INT NOT NULL PRIMARY KEY,
    -- primary key column
    Nombre [NVARCHAR](50) NOT NULL,
    Media INT NOT NULL,
    Imagen [NVARCHAR](50) NOT NULL,
    Pos [NVARCHAR](5) NOT NULL
);
GO
