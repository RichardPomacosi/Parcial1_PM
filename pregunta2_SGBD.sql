
--2.	Adicione una tabla de notas por materia y cuente la cantidad de aprobados por departamento 
--      de manera que solo obtenga una sola fila de resultados con SQL (Dos posibles formas, una mediante 
--      el conteo y otra mediante función de la BD o SGBD).
--SOLUCION

select 
sum(case when identificador.residencia='01' and inscrito.nota>50 then 1 else 0 end) Chiquisaca,
sum(case when identificador.residencia ='02' and inscrito.nota>50then 1 else 0 end) La_paz,
sum(case when identificador.residencia ='03' and inscrito.nota>50 then 1 else 0 end) Cochabamba,
sum(case when identificador.residencia ='04' and inscrito.nota>50 then 1 else 0 end) Oruro,
sum(case when identificador.residencia='05' and inscrito.nota>50 then 1 else 0 end) Potosi,
sum(case when identificador.residencia ='06' and inscrito.nota>50 then 1 else 0 end) Tarija,
sum(case when identificador.residencia ='07' and inscrito.nota>50 then 1 else 0 end) Santa_Cruz,
sum(case when identificador.residencia ='08' and inscrito.nota>50 then 1 else 0 end) Beni,
sum(case when identificador.residencia ='09' and inscrito.nota>50 then 1 else 0 end) Pando,
sum(case when identificador.residencia ='10' and inscrito.nota>50 then 1 else 0 end) Otro
from identificador, inscrito, materia
where identificador.ci=inscrito.ci
and inscrito.codmat=materia.codmat
;


