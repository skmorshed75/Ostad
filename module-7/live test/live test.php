<?php
Please write a SQL query that retrieves the names & ages of all students from a table called students where the age between 18 and 25, ordered by age in ascending order
?>
SELECT name, age
FROM students
WHERE age BETWEEN 18 AND 25
ORDER BY age ASC;