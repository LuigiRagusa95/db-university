-- Contare quanti iscritti ci sono stati ogni anno
SELECT COUNT(*) AS total_enrolment, YEAR(`enrolment_date`) AS year_enrolment 
FROM `students` 
GROUP BY YEAR(`enrolment_date`) 

-- Contare gli insegnanti che hanno l'ufficio nello stesso edificio
SELECT COUNT(*) AS total_number, `office_address` 
FROM `teachers` 
GROUP BY `office_address` 

-- Calcolare la media dei voti di ogni appello d'esame
SELECT AVG(`vote`) AS total_avg, `exam_id` 
FROM `exam_student` 
GROUP BY `exam_id` 

-- Contare quanti corsi di laurea ci sono per ogni dipartimento
SELECT `id`, COUNT(`department_id`) AS total_department 
FROM `degrees` 
GROUP BY `department_id` 