#-----------------------------------------------------------------PREGUNTAS--------------------------------------------------------------
#---PREGUNTA 1 Grupos que tengan mas de 3 miembros-----------------
SELECT * FROM grupo WHERE numero_de_integrantes > 3;

#---PREGUNTA 2.0 Numero de solistas que tocan saxofon--------------
SELECT COUNT(solista.documento) AS numero_solistas FROM solista WHERE solista.instrumentos LIKE 'saxofon';
#---PREGUNTA 2.1 Numero de contratos que tiene un empleado--------------
SELECT id_empleado AS "documento", COUNT(*) as "numero de contratos"
FROM CONTRATO  
WHERE(id_empleado in ((SELECT documento FROM empleado)))

GROUP BY documento;
#--- PREGUNTA 3 Productos que ha vendido un empleado--------------
SELECT * FROM ((SELECT * FROM(producto INNER JOIN factura_producto ON factura_producto.id_producto LIKE producto.codigo))AS tablita) WHERE(tablita.id_factura IN (SELECT codigo FROM factura WHERE(factura.id_empleado LIKE '1036678350'))) 
#---PREGUNTA 4 Total de dinero en ventas de productos--------------
SELECT SUM(precio) AS total FROM (producto INNER JOIN factura_producto ON factura_producto.id_producto LIKE producto.codigo) ;