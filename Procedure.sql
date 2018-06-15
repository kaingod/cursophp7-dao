CREATE PROCEDURE `sp_usuario_insert`(
pdeslogin VARCHAR(64),
pdessenha VARCHAR(256)
)
BEGIN
	
    INSERT INTO tb_usuario (deslogin, dessenha) VALUES (pdeslogin, pdessenha);
	
    SELECT * FROM tb_usuario WHERE idusuario = LAST_INSERT_ID();

END