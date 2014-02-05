/* FRCS
Copyright (C) 2014 Jon Penn

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>. */

INSERT INTO pages VALUES (1, 'Pages', 'SELECT id, name, query, prow, ptable FROM pages', 0, 'pages');
INSERT INTO pages VALUES (2, 'Passwords', 'SELECT id, scout, password FROM passwords', 0, 'passwords');
INSERT INTO pages VALUES (3, 'Colums', 'SELECT id, page, cname, coutput, crow, cinsert, cupdate FROM colums', 0, 'colums');

INSERT INTO colums VALUES (5, 'Pages', 1, 'Name', 'INSERT INTO pages(name) VALUES (:value)', 'UPDATE pages SET name=:value WHERE id=:row', 0);
INSERT INTO colums VALUES (6, 'Pages', 2, 'Query', 'INSERT INTO pages(query) VALUES (:value)', 'UPDATE pages SET query=:value WHERE id=:row', 0);
INSERT INTO colums VALUES (7, 'Pages', 3, 'pRow', 'INSERT INTO pages(prow) VALUES (:value)', 'UPDATE pages SET prow=:value WHERE id=:row', 0);
INSERT INTO colums VALUES (8, 'Pages', 4, 'pTable', 'INSERT INTO pages(ptable) VALUES (:value)', 'UPDATE pages SET ptable=:value WHERE id=:row', 0);
INSERT INTO colums VALUES (9, 'Colums', 1, 'page', 'INSERT INTO colums(page) VALUES (:value)', 'UPDATE colums SET page=:value WHERE id=:row', 0);
INSERT INTO colums VALUES (10, 'Colums', 2, 'Name', 'INSERT INTO colums(cname) VALUES (:value)', 'UPDATE colums SET cname=:value WHERE id=:row', 0);
INSERT INTO colums VALUES (11, 'Colums', 3, 'Output Colum', 'INSERT INTO colums(coutput) VALUES (:value)', 'UPDATE colums SET coutput=:value WHERE id=:row', 0);
INSERT INTO colums VALUES (12, 'Colums', 4, 'Index Colum', 'INSERT INTO colums(crow) VALUES (:value)', 'UPDATE colums SET crow=:value WHERE id=:row', 0);
INSERT INTO colums VALUES (13, 'Colums', 5, 'Insert SQL', 'INSERT INTO colums(cinsert) VALUES (:value)', 'UPDATE colums SET cinsert=:value WHERE id=:row', 0);
INSERT INTO colums VALUES (14, 'Colums', 6, 'Update SQL', 'INSERT INTO colums(cupdate) VALUES (:value)', 'UPDATE colums SET cupdate=:value WHERE id=:row', 0);
INSERT INTO colums VALUES (15, 'Passwords', 1, 'Scout', 'INSERT INTO passwords(scout) VALUES(:value)', 'UPDATE passwords SET scout=:value WHERE id=:row', 0);
INSERT INTO colums VALUES (16, 'Passwords', 2, 'Password', 'INSERT INTO passwords(password) VALUES(:value)', 'UPDATE passwords SET password=:value WHERE id=:row', 0);
