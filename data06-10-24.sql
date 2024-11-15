PGDMP      4            	    |         
   db_control    16.4    16.4 J    9           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            :           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ;           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            <           1262    16398 
   db_control    DATABASE     }   CREATE DATABASE db_control WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Spain.1252';
    DROP DATABASE db_control;
                postgres    false            c           1247    16400    accion    TYPE     �   CREATE TYPE public.accion AS ENUM (
    'No iniciada',
    'En Progreso',
    'Lista para Cierre',
    'Retrasada',
    'Cerrada'
);
    DROP TYPE public.accion;
       public          postgres    false            �            1255    16411 X   fn_agregar_comentario(integer, character, text, date, time without time zone, character)    FUNCTION     �  CREATE FUNCTION public.fn_agregar_comentario(tar_id integer, usua_dni character, come_come text, come_fecha date, come_hora time without time zone, fecha_chat character) RETURNS integer
    LANGUAGE plpgsql
    AS $$
BEGIN
  INSERT INTO public.tb_comentario(tare_id,usua_dni,come_come,come_fecha,come_hora,fecha_chat)
  values(tar_id,usua_dni,come_come,come_fecha,come_hora,fecha_chat);
    return 1;
END;
$$;
 �   DROP FUNCTION public.fn_agregar_comentario(tar_id integer, usua_dni character, come_come text, come_fecha date, come_hora time without time zone, fecha_chat character);
       public          postgres    false            �            1255    16412 )   fn_contar_tarea(public.accion, character)    FUNCTION     Z  CREATE FUNCTION public.fn_contar_tarea(acciontarea public.accion, dni character) RETURNS integer
    LANGUAGE plpgsql
    AS $$
DECLARE 
 cantidad integer;
BEGIN
 select count(*) INTO cantidad from tb_tarea 
 where tb_tarea.tare_stat=acciontarea
 and case when length(dni)>0 then tb_tarea.tare_resp=dni else true end;
  return cantidad;
END;
$$;
 P   DROP FUNCTION public.fn_contar_tarea(acciontarea public.accion, dni character);
       public          postgres    false    867            �            1255    16413 �   fn_crear_usuario(character varying, character varying, character varying, character, character, character varying, character varying, character varying, character varying)    FUNCTION     �  CREATE FUNCTION public.fn_crear_usuario(usua_nombre character varying, usua_apepa character varying, usua_apema character varying, usu_dni character, usua_celu character, usua_corr character varying, usua_pass character varying, usua_foto character varying, usua_empr character varying) RETURNS integer
    LANGUAGE plpgsql
    AS $$
DECLARE
	cant integer  = (select count(*) from public.tb_usuario u where 
					 u.usua_dni=usu_dni);
		
BEGIN
	if cant = 0 then 
	   INSERT into public.tb_usuario(usua_nombre,usua_apepa,usua_apema,usua_dni,usua_celu,usua_corr,usua_pass,usua_foto,usua_empr)
	   values(usua_nombre,usua_apepa,usua_apema,usu_dni,usua_celu,usua_corr,usua_pass,usua_foto,usua_empr);
	   return 1;
	else return 0;
	end if;
END;
$$;
   DROP FUNCTION public.fn_crear_usuario(usua_nombre character varying, usua_apepa character varying, usua_apema character varying, usu_dni character, usua_celu character, usua_corr character varying, usua_pass character varying, usua_foto character varying, usua_empr character varying);
       public          postgres    false            �            1255    16484 8   fn_ingresar_paises(character varying, character varying)    FUNCTION       CREATE FUNCTION public.fn_ingresar_paises(paise_nombr character varying, paise_dn character varying) RETURNS integer
    LANGUAGE plpgsql
    AS $$
DECLARE
BEGIN
  insert into public.paises(paise_nombre, paise_dni)
  values(paise_nombr,paise_dn);
  return 1;
END;
$$;
 d   DROP FUNCTION public.fn_ingresar_paises(paise_nombr character varying, paise_dn character varying);
       public          postgres    false            �            1255    16414 z   fn_ingresar_tarea(text, character varying, character varying, character varying, character varying, character, date, date)    FUNCTION       CREATE FUNCTION public.fn_ingresar_tarea(tar_desc text, tar_crit character varying, tar_resp character varying, tar_depa character varying, tar_orig character varying, usua_dni character, tar_tiem date, tar_crea date) RETURNS integer
    LANGUAGE plpgsql
    AS $$
DECLARE
BEGIN
  insert into public.tb_tarea(tare_desc,tare_crit,tare_resp,tare_stat,tare_depa,tare_orig,usua_dni,tare_tiem,tare_crea)
  values(tar_desc,tar_crit,tar_resp,'No iniciada',tar_depa,tar_orig,usua_dni,tar_tiem,tar_crea);
  return 1;
END;
$$;
 �   DROP FUNCTION public.fn_ingresar_tarea(tar_desc text, tar_crit character varying, tar_resp character varying, tar_depa character varying, tar_orig character varying, usua_dni character, tar_tiem date, tar_crea date);
       public          postgres    false            �            1255    16415    fn_listar_comentario(integer)    FUNCTION     Q  CREATE FUNCTION public.fn_listar_comentario(tarea integer) RETURNS TABLE(come_id integer, tare_id integer, usua_dni character, come_come text, come_fecha date, come_hora time without time zone, nombre text, fecha_chat character)
    LANGUAGE plpgsql
    AS $$
BEGIN
  RETURN QUERY
  SELECT tc.come_id,tc.tare_id,tc.usua_dni,tc.come_come,tc.come_fecha,tc.come_hora,
  concat(usu.usua_nombre,' ',usu.usua_apepa,' ',usu.usua_apema) as nombre,tc.fecha_chat
  FROM tb_comentario tc  
  INNER JOIN tb_usuario usu on tc.usua_dni=usu.usua_dni
  where tc.tare_id=tarea order by  come_id asc;
END; 
$$;
 :   DROP FUNCTION public.fn_listar_comentario(tarea integer);
       public          postgres    false            �            1255    16416    fn_listar_empresa()    FUNCTION     �   CREATE FUNCTION public.fn_listar_empresa() RETURNS TABLE(empr_id integer, empr_name character varying)
    LANGUAGE plpgsql
    AS $$
BEGIN
return query
select emp.empr_id,emp.empr_name from public.tb_empresa emp;
END;
$$;
 *   DROP FUNCTION public.fn_listar_empresa();
       public          postgres    false            �            1255    16789 '   fn_listar_preguntas(integer, character)    FUNCTION     :  CREATE FUNCTION public.fn_listar_preguntas(pr_id integer, dni character) RETURNS TABLE(resp_id integer, usua_dni character, cues_id integer, resp_fecha character varying, resp_area character varying, res_subarea character varying, resp_monit character varying, resp_cues1 character varying, resp_cues2 character varying, resp_cues3 character varying, resp_cues4 character varying, resp_cues5 character varying, resp_cues6 character varying, resp_cues7 character varying, resp_cues8 character varying, resp_cues9 character varying, resp_cues10 character varying, resp_cues11 character varying, resp_cues12 character varying, resp_cues13 character varying, resp_cues14 character varying, resp_status character varying, cues1 character varying, cues2 character varying, cues3 character varying, cues4 character varying, cues5 character varying, cues6 character varying, cues7 character varying, cues8 character varying, cues9 character varying, cues10 character varying, cues11 character varying, cues12 character varying, cues13 character varying, cues14 character varying)
    LANGUAGE plpgsql
    AS $$
BEGIN
return query
SELECT res.resp_id, res.usua_dni, res.cues_id, res.resp_fecha, 
res.resp_area, res.res_subarea,res.resp_monit,res.resp_cues1, res.resp_cues2, res.resp_cues3, res.resp_cues4, 
res.resp_cues5, res.resp_cues6, res.resp_cues7, res.resp_cues8, res.resp_cues9, 
res.resp_cues10, res.resp_cues11, res.resp_cues12, res.resp_cues13, res.resp_cues14, 
res.resp_status,cu.cues_1, cu.cues_2, cu.cues_3, cu.cues_4, 
cu.cues_5, cu.cues_6, cu.cues_7, cu.cues_8, cu.cues_9, 
cu.cues_10, cu.cues_11, cu.cues_12, cu.cues_13, cu.cues_14

	FROM public.tb_respuesta res 
	JOIN public.tb_usuario us ON res.usua_dni = us.usua_dni
	JOIN public.tb_cuestionario cu ON cu.cues_id = res.cues_id 
	WHERE res.cues_id = pr_id AND res.usua_dni = dni;
END;
$$;
 H   DROP FUNCTION public.fn_listar_preguntas(pr_id integer, dni character);
       public          postgres    false            �            1255    16494 4   fn_listar_tareas(character varying, character, date)    FUNCTION     �
  CREATE FUNCTION public.fn_listar_tareas(estad character varying, dni character, fecha_hoy date) RETURNS TABLE(tare_id integer, tare_desc text, tare_crit character varying, tare_resp character varying, tare_stat public.accion, tare_depa character varying, tare_orig character varying, usua_dni character, tare_tiem date, tare_crea date, tare_nombrecre text, tare_nombre text)
    LANGUAGE plpgsql
    AS $$
DECLARE
  esta accion;
  contador integer= (select count(*) from PUBLIC.tb_tarea ta where ta.tare_tiem < fecha_hoy AND ta.tare_stat<>'Cerrada');
BEGIN
  if(length(estad)>0)then
     esta =estad::accion; 
	 --CONTADOR ES PARA VER SI ALGUIEN YA SE PASO LA FECHA
     if(contador>0 and esta is not null) then 
        update tb_tarea as ta set tare_stat ='Retrasada' where ta.tare_tiem < fecha_hoy AND ta.tare_stat<>'Cerrada' ;
        RETURN QUERY
        SELECT ta.tare_id,ta.tare_desc,ta.tare_crit,ta.tare_resp,ta.tare_stat,ta.tare_depa,ta.tare_orig,ta.usua_dni,
ta.tare_tiem,ta.tare_crea, concat(us.usua_nombre,' ',us.usua_apepa,' ', us.usua_apema) as nombre_crea,
(SELECT concat(cre.usua_nombre,' ',cre.usua_apepa,' ', cre.usua_apema) FROM PUBLIC.tb_usuario cre where cre.usua_dni=ta.tare_resp) as nombre
FROM PUBLIC.tb_tarea ta INNER JOIN PUBLIC.tb_usuario us on us.usua_dni=ta.usua_dni 
         where ta.tare_stat=esta AND
		 CASE WHEN LENGTH(dni)>0 then ta.tare_resp=dni else true end
		 order by ta.tare_id DESC;
      else 
         RETURN QUERY
         SELECT ta.tare_id,ta.tare_desc,ta.tare_crit,ta.tare_resp,ta.tare_stat,ta.tare_depa,ta.tare_orig,ta.usua_dni,
ta.tare_tiem,ta.tare_crea, concat(us.usua_nombre,' ',us.usua_apepa,' ', us.usua_apema) as nombre_crea,
(SELECT concat(cre.usua_nombre,' ',cre.usua_apepa,' ', cre.usua_apema) FROM PUBLIC.tb_usuario cre where cre.usua_dni=ta.tare_resp) as nombre
FROM PUBLIC.tb_tarea ta INNER JOIN PUBLIC.tb_usuario us on us.usua_dni=ta.usua_dni 
          where ta.tare_stat=esta AND
		  CASE WHEN LENGTH(dni)>0 then ta.tare_resp=dni else true end
		  order by ta.tare_id DESC;
	     end if;
	 --IMPRIME EL EXCEL
	 else 
	 --IMPRIME EL EXCEL - ME LISTA TODAS LAS TAREAS 
	   RETURN QUERY
         SELECT ta.tare_id,ta.tare_desc,ta.tare_crit,ta.tare_resp,ta.tare_stat,ta.tare_depa,ta.tare_orig,ta.usua_dni,
ta.tare_tiem,ta.tare_crea, concat(us.usua_nombre,' ',us.usua_apepa,' ', us.usua_apema) as nombre_crea,
(SELECT concat(cre.usua_nombre,' ',cre.usua_apepa,' ', cre.usua_apema) FROM PUBLIC.tb_usuario cre where cre.usua_dni=ta.tare_resp) as nombre
FROM PUBLIC.tb_tarea ta INNER JOIN PUBLIC.tb_usuario us on us.usua_dni=ta.usua_dni 
          WHERE 
		    CASE WHEN LENGTH(dni)>0 then ta.tare_resp=dni else true end 
		  order by ta.tare_id DESC;
	 end if;
END;
$$;
 _   DROP FUNCTION public.fn_listar_tareas(estad character varying, dni character, fecha_hoy date);
       public          postgres    false    867            �            1255    16418    fn_listar_usuario()    FUNCTION     �  CREATE FUNCTION public.fn_listar_usuario() RETURNS TABLE(usua_id integer, usua_nombre character varying, usua_apepa character varying, usua_apema character varying, nombre text, usua_dni character, usua_celu character, usua_corr character varying, usua_pass character varying, usua_foto character varying, usua_empr character varying, usua_rol character varying)
    LANGUAGE plpgsql
    AS $$
BEGIN

return query
select
usu.usua_id,
usu.usua_nombre,usu.usua_apepa,usu.usua_apema,
concat(usu.usua_nombre,' ',usu.usua_apepa,' ',usu.usua_apema)as nombre,
usu.usua_dni,
usu.usua_celu,usu.usua_corr,usu.usua_pass,usu.usua_foto,usu.usua_empr,
usu.usua_rol
from public.tb_usuario usu;
END;
$$;
 *   DROP FUNCTION public.fn_listar_usuario();
       public          postgres    false            �            1255    16419    fn_probando()    FUNCTION     �   CREATE FUNCTION public.fn_probando() RETURNS integer
    LANGUAGE plpgsql
    AS $$
declare 
 
 contador integer= (select count(*) from public.tb_tarea where tare_tiem < current_Date);
begin
return contador;
end;
$$;
 $   DROP FUNCTION public.fn_probando();
       public          postgres    false            �            1255    16420 '   fn_update_statu(integer, public.accion)    FUNCTION     �   CREATE FUNCTION public.fn_update_statu(id_tare integer, estado public.accion) RETURNS integer
    LANGUAGE plpgsql
    AS $$
BEGIN

    update public.tb_tarea
    set tare_stat=estado
    where tare_id=id_tare;
	return 1;
END;
$$;
 M   DROP FUNCTION public.fn_update_statu(id_tare integer, estado public.accion);
       public          postgres    false    867            �            1255    16421    fn_verificar_usu(character)    FUNCTION     �  CREATE FUNCTION public.fn_verificar_usu(dni character) RETURNS TABLE(usua_id integer, usua_nombre character varying, usua_apepa character varying, usua_apema character varying, nombre text, usua_dni character, usua_celu character, usua_corr character varying, usua_pass character varying, usua_foto character varying, usua_empr character varying, usua_rol character varying)
    LANGUAGE plpgsql
    AS $$
BEGIN
return query
select
usu.usua_id,
usu.usua_nombre,usu.usua_apepa,usu.usua_apema,
concat(usu.usua_nombre,' ',usu.usua_apepa,' ',usu.usua_apema)as nombre,
usu.usua_dni,
usu.usua_celu,usu.usua_corr,usu.usua_pass,usu.usua_foto,usu.usua_empr,
usu.usua_rol 
from public.tb_usuario usu where usu.usua_dni=dni;

END;
$$;
 6   DROP FUNCTION public.fn_verificar_usu(dni character);
       public          postgres    false            �            1255    16422    probar(character varying)    FUNCTION     �   CREATE FUNCTION public.probar(estad character varying) RETURNS public.accion
    LANGUAGE plpgsql
    AS $$
DECLARE
esta accion;
BEGIN
 if(length(estad)>0)then
     esta =estad::accion;
	 return esta;
 else
   return 'No iniciada';
   end if;
  
END;
$$;
 6   DROP FUNCTION public.probar(estad character varying);
       public          postgres    false    867            �            1259    16471    paises    TABLE     �   CREATE TABLE public.paises (
    paise_nombre character varying,
    paise_id integer NOT NULL,
    paise_dni character varying(9)
);
    DROP TABLE public.paises;
       public         heap    postgres    false            �            1259    16470    paises_id_seq    SEQUENCE     �   CREATE SEQUENCE public.paises_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.paises_id_seq;
       public          postgres    false    224            =           0    0    paises_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.paises_id_seq OWNED BY public.paises.paise_id;
          public          postgres    false    223            �            1259    16423    tb_comentario    TABLE       CREATE TABLE public.tb_comentario (
    come_id integer NOT NULL,
    tare_id integer NOT NULL,
    usua_dni character(8) NOT NULL,
    come_come text NOT NULL,
    come_fecha date NOT NULL,
    come_hora time without time zone NOT NULL,
    fecha_chat character(20)
);
 !   DROP TABLE public.tb_comentario;
       public         heap    postgres    false            �            1259    16428    tb_comentario_come_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tb_comentario_come_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.tb_comentario_come_id_seq;
       public          postgres    false    215            >           0    0    tb_comentario_come_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.tb_comentario_come_id_seq OWNED BY public.tb_comentario.come_id;
          public          postgres    false    216            �            1259    16559    tb_cuestionario    TABLE     5  CREATE TABLE public.tb_cuestionario (
    cues_id integer NOT NULL,
    cues_area character varying NOT NULL,
    cues_subarea character varying NOT NULL,
    cues_monit character varying NOT NULL,
    cues_1 character varying(300) NOT NULL,
    cues_2 character varying(300) NOT NULL,
    cues_3 character varying(300) NOT NULL,
    cues_4 character varying(300) NOT NULL,
    cues_5 character varying(300) NOT NULL,
    cues_6 character varying(300) NOT NULL,
    cues_7 character varying(300) NOT NULL,
    cues_8 character varying(300) NOT NULL,
    cues_9 character varying(300) NOT NULL,
    cues_10 character varying(300) NOT NULL,
    cues_11 character varying(300) NOT NULL,
    cues_12 character varying(300) NOT NULL,
    cues_13 character varying(300) NOT NULL,
    cues_14 character varying(300) NOT NULL
);
 #   DROP TABLE public.tb_cuestionario;
       public         heap    postgres    false            �            1259    16558    tb_cuestionario_cues_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tb_cuestionario_cues_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.tb_cuestionario_cues_id_seq;
       public          postgres    false    226            ?           0    0    tb_cuestionario_cues_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.tb_cuestionario_cues_id_seq OWNED BY public.tb_cuestionario.cues_id;
          public          postgres    false    225            �            1259    16429 
   tb_empresa    TABLE     �   CREATE TABLE public.tb_empresa (
    empr_id integer NOT NULL,
    empr_name character varying(60) NOT NULL,
    paise_id integer
);
    DROP TABLE public.tb_empresa;
       public         heap    postgres    false            �            1259    16432    tb_empresa_empr_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tb_empresa_empr_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.tb_empresa_empr_id_seq;
       public          postgres    false    217            @           0    0    tb_empresa_empr_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.tb_empresa_empr_id_seq OWNED BY public.tb_empresa.empr_id;
          public          postgres    false    218            �            1259    16670    tb_respuesta    TABLE     5  CREATE TABLE public.tb_respuesta (
    resp_id integer NOT NULL,
    usua_dni character(8) NOT NULL,
    cues_id integer NOT NULL,
    resp_cues1 character varying NOT NULL,
    resp_fecha character varying NOT NULL,
    resp_area character varying NOT NULL,
    res_subarea character varying NOT NULL,
    resp_cues2 character varying,
    resp_cues3 character varying,
    resp_cues4 character varying,
    resp_cues5 character varying,
    resp_cues6 character varying,
    resp_cues7 character varying,
    resp_cues8 character varying,
    resp_cues9 character varying,
    resp_cues10 character varying,
    resp_cues11 character varying,
    resp_cues12 character varying,
    resp_cues13 character varying,
    resp_cues14 character varying,
    resp_status character varying,
    resp_monit character varying
);
     DROP TABLE public.tb_respuesta;
       public         heap    postgres    false            �            1259    16669    tb_respuesta_resp_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tb_respuesta_resp_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.tb_respuesta_resp_id_seq;
       public          postgres    false    228            A           0    0    tb_respuesta_resp_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.tb_respuesta_resp_id_seq OWNED BY public.tb_respuesta.resp_id;
          public          postgres    false    227            �            1259    16433    tb_tarea    TABLE       CREATE TABLE public.tb_tarea (
    tare_id integer NOT NULL,
    tare_desc text NOT NULL,
    tare_crit character varying NOT NULL,
    tare_resp character varying NOT NULL,
    tare_stat public.accion NOT NULL,
    tare_depa character varying NOT NULL,
    tare_orig character varying NOT NULL,
    usua_dni character(8) NOT NULL,
    tare_tiem date NOT NULL,
    tare_crea date
);
    DROP TABLE public.tb_tarea;
       public         heap    postgres    false    867            �            1259    16438    tb_tarea_tare_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tb_tarea_tare_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.tb_tarea_tare_id_seq;
       public          postgres    false    219            B           0    0    tb_tarea_tare_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.tb_tarea_tare_id_seq OWNED BY public.tb_tarea.tare_id;
          public          postgres    false    220            �            1259    16439 
   tb_usuario    TABLE     �  CREATE TABLE public.tb_usuario (
    usua_id integer NOT NULL,
    usua_nombre character varying(50) NOT NULL,
    usua_apepa character varying(20) NOT NULL,
    usua_apema character varying(25) NOT NULL,
    usua_dni character(8) NOT NULL,
    usua_celu character(9) NOT NULL,
    usua_corr character varying(50) NOT NULL,
    usua_pass character varying(100) NOT NULL,
    usua_foto character varying(100),
    usua_empr character varying(30) NOT NULL,
    usua_rol character varying(20)
);
    DROP TABLE public.tb_usuario;
       public         heap    postgres    false            �            1259    16442    tb_usuario_usua_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tb_usuario_usua_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.tb_usuario_usua_id_seq;
       public          postgres    false    221            C           0    0    tb_usuario_usua_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.tb_usuario_usua_id_seq OWNED BY public.tb_usuario.usua_id;
          public          postgres    false    222            �           2604    16474    paises paise_id    DEFAULT     l   ALTER TABLE ONLY public.paises ALTER COLUMN paise_id SET DEFAULT nextval('public.paises_id_seq'::regclass);
 >   ALTER TABLE public.paises ALTER COLUMN paise_id DROP DEFAULT;
       public          postgres    false    224    223    224                       2604    16443    tb_comentario come_id    DEFAULT     ~   ALTER TABLE ONLY public.tb_comentario ALTER COLUMN come_id SET DEFAULT nextval('public.tb_comentario_come_id_seq'::regclass);
 D   ALTER TABLE public.tb_comentario ALTER COLUMN come_id DROP DEFAULT;
       public          postgres    false    216    215            �           2604    16562    tb_cuestionario cues_id    DEFAULT     �   ALTER TABLE ONLY public.tb_cuestionario ALTER COLUMN cues_id SET DEFAULT nextval('public.tb_cuestionario_cues_id_seq'::regclass);
 F   ALTER TABLE public.tb_cuestionario ALTER COLUMN cues_id DROP DEFAULT;
       public          postgres    false    225    226    226            �           2604    16444    tb_empresa empr_id    DEFAULT     x   ALTER TABLE ONLY public.tb_empresa ALTER COLUMN empr_id SET DEFAULT nextval('public.tb_empresa_empr_id_seq'::regclass);
 A   ALTER TABLE public.tb_empresa ALTER COLUMN empr_id DROP DEFAULT;
       public          postgres    false    218    217            �           2604    16673    tb_respuesta resp_id    DEFAULT     |   ALTER TABLE ONLY public.tb_respuesta ALTER COLUMN resp_id SET DEFAULT nextval('public.tb_respuesta_resp_id_seq'::regclass);
 C   ALTER TABLE public.tb_respuesta ALTER COLUMN resp_id DROP DEFAULT;
       public          postgres    false    228    227    228            �           2604    16445    tb_tarea tare_id    DEFAULT     t   ALTER TABLE ONLY public.tb_tarea ALTER COLUMN tare_id SET DEFAULT nextval('public.tb_tarea_tare_id_seq'::regclass);
 ?   ALTER TABLE public.tb_tarea ALTER COLUMN tare_id DROP DEFAULT;
       public          postgres    false    220    219            �           2604    16446    tb_usuario usua_id    DEFAULT     x   ALTER TABLE ONLY public.tb_usuario ALTER COLUMN usua_id SET DEFAULT nextval('public.tb_usuario_usua_id_seq'::regclass);
 A   ALTER TABLE public.tb_usuario ALTER COLUMN usua_id DROP DEFAULT;
       public          postgres    false    222    221            2          0    16471    paises 
   TABLE DATA           C   COPY public.paises (paise_nombre, paise_id, paise_dni) FROM stdin;
    public          postgres    false    224   ��       )          0    16423    tb_comentario 
   TABLE DATA           q   COPY public.tb_comentario (come_id, tare_id, usua_dni, come_come, come_fecha, come_hora, fecha_chat) FROM stdin;
    public          postgres    false    215   Ń       4          0    16559    tb_cuestionario 
   TABLE DATA           �   COPY public.tb_cuestionario (cues_id, cues_area, cues_subarea, cues_monit, cues_1, cues_2, cues_3, cues_4, cues_5, cues_6, cues_7, cues_8, cues_9, cues_10, cues_11, cues_12, cues_13, cues_14) FROM stdin;
    public          postgres    false    226   ��       +          0    16429 
   tb_empresa 
   TABLE DATA           B   COPY public.tb_empresa (empr_id, empr_name, paise_id) FROM stdin;
    public          postgres    false    217   ��       6          0    16670    tb_respuesta 
   TABLE DATA           ,  COPY public.tb_respuesta (resp_id, usua_dni, cues_id, resp_cues1, resp_fecha, resp_area, res_subarea, resp_cues2, resp_cues3, resp_cues4, resp_cues5, resp_cues6, resp_cues7, resp_cues8, resp_cues9, resp_cues10, resp_cues11, resp_cues12, resp_cues13, resp_cues14, resp_status, resp_monit) FROM stdin;
    public          postgres    false    228   �       -          0    16433    tb_tarea 
   TABLE DATA           �   COPY public.tb_tarea (tare_id, tare_desc, tare_crit, tare_resp, tare_stat, tare_depa, tare_orig, usua_dni, tare_tiem, tare_crea) FROM stdin;
    public          postgres    false    219   H�       /          0    16439 
   tb_usuario 
   TABLE DATA           �   COPY public.tb_usuario (usua_id, usua_nombre, usua_apepa, usua_apema, usua_dni, usua_celu, usua_corr, usua_pass, usua_foto, usua_empr, usua_rol) FROM stdin;
    public          postgres    false    221   ��       D           0    0    paises_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.paises_id_seq', 1, true);
          public          postgres    false    223            E           0    0    tb_comentario_come_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.tb_comentario_come_id_seq', 9, true);
          public          postgres    false    216            F           0    0    tb_cuestionario_cues_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.tb_cuestionario_cues_id_seq', 3, true);
          public          postgres    false    225            G           0    0    tb_empresa_empr_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.tb_empresa_empr_id_seq', 8, true);
          public          postgres    false    218            H           0    0    tb_respuesta_resp_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.tb_respuesta_resp_id_seq', 6, true);
          public          postgres    false    227            I           0    0    tb_tarea_tare_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.tb_tarea_tare_id_seq', 3, true);
          public          postgres    false    220            J           0    0    tb_usuario_usua_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.tb_usuario_usua_id_seq', 19, true);
          public          postgres    false    222            �           2606    16478    paises paises_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.paises
    ADD CONSTRAINT paises_pkey PRIMARY KEY (paise_id);
 <   ALTER TABLE ONLY public.paises DROP CONSTRAINT paises_pkey;
       public            postgres    false    224            �           2606    16448     tb_comentario tb_comentario_pkey 
   CONSTRAINT     c   ALTER TABLE ONLY public.tb_comentario
    ADD CONSTRAINT tb_comentario_pkey PRIMARY KEY (come_id);
 J   ALTER TABLE ONLY public.tb_comentario DROP CONSTRAINT tb_comentario_pkey;
       public            postgres    false    215            �           2606    16566 $   tb_cuestionario tb_cuestionario_pkey 
   CONSTRAINT     g   ALTER TABLE ONLY public.tb_cuestionario
    ADD CONSTRAINT tb_cuestionario_pkey PRIMARY KEY (cues_id);
 N   ALTER TABLE ONLY public.tb_cuestionario DROP CONSTRAINT tb_cuestionario_pkey;
       public            postgres    false    226            �           2606    16450    tb_empresa tb_empresa_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.tb_empresa
    ADD CONSTRAINT tb_empresa_pkey PRIMARY KEY (empr_id);
 D   ALTER TABLE ONLY public.tb_empresa DROP CONSTRAINT tb_empresa_pkey;
       public            postgres    false    217            �           2606    16677    tb_respuesta tb_respuesta_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY public.tb_respuesta
    ADD CONSTRAINT tb_respuesta_pkey PRIMARY KEY (resp_id);
 H   ALTER TABLE ONLY public.tb_respuesta DROP CONSTRAINT tb_respuesta_pkey;
       public            postgres    false    228            �           2606    16452    tb_tarea tb_tarea_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.tb_tarea
    ADD CONSTRAINT tb_tarea_pkey PRIMARY KEY (tare_id);
 @   ALTER TABLE ONLY public.tb_tarea DROP CONSTRAINT tb_tarea_pkey;
       public            postgres    false    219            �           2606    16454    tb_usuario tb_usuario_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.tb_usuario
    ADD CONSTRAINT tb_usuario_pkey PRIMARY KEY (usua_dni);
 D   ALTER TABLE ONLY public.tb_usuario DROP CONSTRAINT tb_usuario_pkey;
       public            postgres    false    221            �           2606    16683    tb_respuesta cues_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.tb_respuesta
    ADD CONSTRAINT cues_id FOREIGN KEY (cues_id) REFERENCES public.tb_cuestionario(cues_id) NOT VALID;
 >   ALTER TABLE ONLY public.tb_respuesta DROP CONSTRAINT cues_id;
       public          postgres    false    226    228    4753            �           2606    16455    tb_comentario fk_tarea_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.tb_comentario
    ADD CONSTRAINT fk_tarea_id FOREIGN KEY (tare_id) REFERENCES public.tb_tarea(tare_id) NOT VALID;
 C   ALTER TABLE ONLY public.tb_comentario DROP CONSTRAINT fk_tarea_id;
       public          postgres    false    215    219    4747            �           2606    16460    tb_comentario fk_usuadni    FK CONSTRAINT     �   ALTER TABLE ONLY public.tb_comentario
    ADD CONSTRAINT fk_usuadni FOREIGN KEY (usua_dni) REFERENCES public.tb_usuario(usua_dni) NOT VALID;
 B   ALTER TABLE ONLY public.tb_comentario DROP CONSTRAINT fk_usuadni;
       public          postgres    false    221    4749    215            �           2606    16479    tb_empresa paise_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.tb_empresa
    ADD CONSTRAINT paise_id FOREIGN KEY (paise_id) REFERENCES public.paises(paise_id) NOT VALID;
 =   ALTER TABLE ONLY public.tb_empresa DROP CONSTRAINT paise_id;
       public          postgres    false    4751    217    224            �           2606    16465    tb_tarea tarea_fk_usua    FK CONSTRAINT     �   ALTER TABLE ONLY public.tb_tarea
    ADD CONSTRAINT tarea_fk_usua FOREIGN KEY (usua_dni) REFERENCES public.tb_usuario(usua_dni) NOT VALID;
 @   ALTER TABLE ONLY public.tb_tarea DROP CONSTRAINT tarea_fk_usua;
       public          postgres    false    221    219    4749            �           2606    16678    tb_respuesta usua_dni    FK CONSTRAINT     �   ALTER TABLE ONLY public.tb_respuesta
    ADD CONSTRAINT usua_dni FOREIGN KEY (usua_dni) REFERENCES public.tb_usuario(usua_dni) NOT VALID;
 ?   ALTER TABLE ONLY public.tb_respuesta DROP CONSTRAINT usua_dni;
       public          postgres    false    228    221    4749            2      x�K����M�L�4�47633�=... ^��      )   �   x���A� �5�����K�n��h�b��k8ZMJf3��3|(�v�;�bH��L�P�D!�`խ[�gW�'I���m ˡ�Ps�L�W��ps�jY��c��Yּ�.��*��(Q��Ӹ�m����B�-'8~���}��������6X��� u�>�{'۞as�R� �js�      4     x��V�n7]�_Ad%����A�]Ԁj�Q�)��g�e�r�k�e�E>���c=��fF����v��xD�ǹ眹_O�o.���/�?����Wo�x�XN��k�x���u�f�ZI/��9�(2�<zUk��$�T��4�V��F�hJg����U��N�&�]�K�(��k����#�;���cg9��>P��pf���\~P�^�]4r�C��WB��e�U�v!��r.�}*�;L�����C5K%࿾��'ȏ�]m�D.����p �ud�kђ��H��t�[Ŧ�(��v��I'|��0[`r���l
� v�����!�E;x��V ���sTa�Q����hzl^����D��� �o�H57�A����^ըX��|>�*�r� 0�IBt8��>M�T*� M�v΢Ѧ���6�Յ2��FU�չ�Ϥ�쟶T�@���P�j�K+�Y�������:r�mAY�R��ё�!"�px�0f��?�O��e�=��O������"�
�Z%�3�4���	Y��b˚�����i
h����1�c!��Q8J����.3 �3��Ki24۟7��<��kVe#+2���`{��:�5�2�AG��hQ+A7�E&�0N(�r��6���S�:5� 
䢧�!(�:�3�'@u��>�L��B�U'�䳙���j~��ܙ��}�\r�V� o�ĸ�1*N�#$��@P��*B�4Wv�ȀܒKd3���[�E��v�����Xr��Fl����#����Ŭ����񳘮7��Y�A"u`�W;��~P��_���o&~���4j2�=џ���-塜~[�$��n,�F��7�(h��I�;���0��=�������(�:`���h;9Ȅgr7h�Hw�0+-�	y�c�R�]1K�Ô��;P^fl��q���q?UE�R�Eȡ <�X�dN�g���zg����g!��8����gߌ�Ѹ��Ѹ��Ѹ��Ѹ��Q�};�F�n4�F�n4�F�n4�F�n4�F�n������o��$�      +   ,  x�M��N�0Eד��XM�^N�i�������U*�D��q\	���y��,J�D�6N.+��&���Ds���`�NY�wT+vU'm`�P;�����bO'\A��~�װ�2��B��1�6 l�{����3�]�r��ٰu�,E����h+T<~�0�����aj^ �t�$�P�I�|��E{rLQB�Z9ZR�Iw��cS�H���tC�Ƌ�X�f�ײ�iēp�?fvѵ�h�e����bd|�e��z�y?_�����<�߯�ᖒ�3^�&�C�+~&u'�e�/�pb      6   U   x�3�4767�074�4���4202�54�50�G.���~�N>��1~\FS�81�1B���	��x���e��?�*c���� �t&�      -   �   x�mα
�0����J�R�:J��r���Rԡ����X�j���w��f�u%ˊ/7����3�Q?ī�.ݱkO-Ծh88�ܯ��L��@��U���*�����ltl�������ix����"�|M�)�i�#8����9�I����^�8̅O��?Y      /   �  x����n�:���Sd�1c����P���%hK[$Mh(��@�a��y�C��jϮt�5���$Z��FF)!e��"*+�TQ�dY@�m��������q�{���>N�8��	g}�,'y���c���a�?ڳ�ˬ�6��EE�`:45�kt��e6yG�	#)dcIP~��+������=��jw2�,�:^�dXl&��kr�OK����� �|-�z��H� ��Q�9�-HPT(�PyE�$QFݬ������\�UTm��{���Ԗk��]Y�Ź=(��G��>�}#� &��q����������xZ0��`Q�Ա��<�9�M<b��B�ᑆ�e:Y!�y�a���d�|x$<�u_�/����X;sn�"��{� m���E�V-*V�$��Gj�����C�Ĝ˩UV�ȣ*��tԇ3%�XT��An�ƾ��i��]�+��Fr{ZxGy��~��[1����#��|��Z)Ky}9��S�9��t6�Z�4q �����
�*���DH�V埰��	�8ZՅ��-�<�4�ݠ]�uk֛��%���c"��t�D~׮t�F�N��0��5'fKƕ��ʇ���[��G�+6#��T�6�M��h�ňI{7�4�^�+2�#���o�����[~E�j�`�IHo�v���8
%j��>�Jj���Ӌ/�g�j�@mI��j�j�zΨ#��M7��< ��VQUTI0����<�7���o��T���iBΕ�j�z^�gy�F�5k��n��dV�K5-2o?��V�+��L@�ݹ�K����s��^�F�߬M��D�NG,ȬM�����YI
g�m�5����xM�eCw�>�l&�}��;e�s4�R�� ��U�C�&6���VIP&J�h.��ID��p�'k�������,�g��Ns�k��������#�?     