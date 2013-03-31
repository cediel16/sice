--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: administrativos; Type: TABLE; Schema: public; Owner: johel; Tablespace: 
--

CREATE TABLE administrativos (
    id integer NOT NULL,
    cedula character varying(15) NOT NULL,
    primer_nombre character varying(30) NOT NULL,
    segundo_nombre character varying(30),
    primer_apellido character varying(30) NOT NULL,
    segundo_apellido character varying(30)
);


ALTER TABLE public.administrativos OWNER TO johel;

--
-- Name: administrativos_id_seq; Type: SEQUENCE; Schema: public; Owner: johel
--

CREATE SEQUENCE administrativos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.administrativos_id_seq OWNER TO johel;

--
-- Name: administrativos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: johel
--

ALTER SEQUENCE administrativos_id_seq OWNED BY administrativos.id;


--
-- Name: alumnos; Type: TABLE; Schema: public; Owner: johel; Tablespace: 
--

CREATE TABLE alumnos (
    id integer NOT NULL,
    cedula character varying(15),
    primer_nombre character varying(30) NOT NULL,
    segundo_nombre character varying(30),
    primer_apellido character varying(30) NOT NULL,
    segundo_apellido character varying(30)
);


ALTER TABLE public.alumnos OWNER TO johel;

--
-- Name: alumnos_id_seq; Type: SEQUENCE; Schema: public; Owner: johel
--

CREATE SEQUENCE alumnos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.alumnos_id_seq OWNER TO johel;

--
-- Name: alumnos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: johel
--

ALTER SEQUENCE alumnos_id_seq OWNED BY alumnos.id;


--
-- Name: alumnos_representantes; Type: TABLE; Schema: public; Owner: johel; Tablespace: 
--

CREATE TABLE alumnos_representantes (
    id integer NOT NULL,
    alumno_fkey integer NOT NULL,
    representante_fkey integer NOT NULL
);


ALTER TABLE public.alumnos_representantes OWNER TO johel;

--
-- Name: alumnos_representantes_id_seq; Type: SEQUENCE; Schema: public; Owner: johel
--

CREATE SEQUENCE alumnos_representantes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.alumnos_representantes_id_seq OWNER TO johel;

--
-- Name: alumnos_representantes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: johel
--

ALTER SEQUENCE alumnos_representantes_id_seq OWNED BY alumnos_representantes.id;


--
-- Name: docentes; Type: TABLE; Schema: public; Owner: johel; Tablespace: 
--

CREATE TABLE docentes (
    id integer NOT NULL,
    cedula character varying(15) NOT NULL,
    primer_nombre character varying(30) NOT NULL,
    segundo_nombre character varying(30),
    primer_apellido character varying(30) NOT NULL,
    segundo_apellido character varying(30),
    foto bytea
);


ALTER TABLE public.docentes OWNER TO johel;

--
-- Name: docentes_id_seq; Type: SEQUENCE; Schema: public; Owner: johel
--

CREATE SEQUENCE docentes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.docentes_id_seq OWNER TO johel;

--
-- Name: docentes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: johel
--

ALTER SEQUENCE docentes_id_seq OWNED BY docentes.id;


--
-- Name: empleados; Type: TABLE; Schema: public; Owner: johel; Tablespace: 
--

CREATE TABLE empleados (
    id integer NOT NULL,
    cedula character varying(15) NOT NULL,
    primer_nombre character varying(30) NOT NULL,
    segundo_nombre character varying(30),
    primer_apellido character varying(30) NOT NULL,
    segundo_apellido character varying(30)
);


ALTER TABLE public.empleados OWNER TO johel;

--
-- Name: empleados_id_seq; Type: SEQUENCE; Schema: public; Owner: johel
--

CREATE SEQUENCE empleados_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.empleados_id_seq OWNER TO johel;

--
-- Name: empleados_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: johel
--

ALTER SEQUENCE empleados_id_seq OWNED BY empleados.id;


--
-- Name: modulos; Type: TABLE; Schema: public; Owner: johel; Tablespace: 
--

CREATE TABLE modulos (
    id integer NOT NULL,
    modulo character varying(50) NOT NULL
);


ALTER TABLE public.modulos OWNER TO johel;

--
-- Name: modulos_id_seq; Type: SEQUENCE; Schema: public; Owner: johel
--

CREATE SEQUENCE modulos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.modulos_id_seq OWNER TO johel;

--
-- Name: modulos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: johel
--

ALTER SEQUENCE modulos_id_seq OWNED BY modulos.id;


--
-- Name: modulos_permisos; Type: TABLE; Schema: public; Owner: johel; Tablespace: 
--

CREATE TABLE modulos_permisos (
    id integer NOT NULL,
    modulo_fkey integer NOT NULL,
    permiso_fkey integer NOT NULL
);


ALTER TABLE public.modulos_permisos OWNER TO johel;

--
-- Name: modulos_permisos_id_seq; Type: SEQUENCE; Schema: public; Owner: johel
--

CREATE SEQUENCE modulos_permisos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.modulos_permisos_id_seq OWNER TO johel;

--
-- Name: modulos_permisos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: johel
--

ALTER SEQUENCE modulos_permisos_id_seq OWNED BY modulos_permisos.id;


--
-- Name: permisos; Type: TABLE; Schema: public; Owner: johel; Tablespace: 
--

CREATE TABLE permisos (
    id integer NOT NULL,
    permiso text NOT NULL
);


ALTER TABLE public.permisos OWNER TO johel;

--
-- Name: permisos_id_seq; Type: SEQUENCE; Schema: public; Owner: johel
--

CREATE SEQUENCE permisos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.permisos_id_seq OWNER TO johel;

--
-- Name: permisos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: johel
--

ALTER SEQUENCE permisos_id_seq OWNED BY permisos.id;


--
-- Name: representantes; Type: TABLE; Schema: public; Owner: johel; Tablespace: 
--

CREATE TABLE representantes (
    id integer NOT NULL,
    cedula character varying(15) NOT NULL,
    primer_nombre character varying(30) NOT NULL,
    segundo_nombre character varying(30),
    primer_apellido character varying(30) NOT NULL,
    segundo_apellido character varying(30),
    sexo character varying(10) NOT NULL,
    email character varying(50) NOT NULL,
    status character varying(20) DEFAULT 'activo'::character varying NOT NULL,
    foto bytea,
    fecha_nacimiento date
);


ALTER TABLE public.representantes OWNER TO johel;

--
-- Name: representantes_id_seq; Type: SEQUENCE; Schema: public; Owner: johel
--

CREATE SEQUENCE representantes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.representantes_id_seq OWNER TO johel;

--
-- Name: representantes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: johel
--

ALTER SEQUENCE representantes_id_seq OWNED BY representantes.id;


--
-- Name: roles; Type: TABLE; Schema: public; Owner: johel; Tablespace: 
--

CREATE TABLE roles (
    id integer NOT NULL,
    rol character varying(50) NOT NULL,
    status character varying(20) DEFAULT 'activo'::character varying NOT NULL
);


ALTER TABLE public.roles OWNER TO johel;

--
-- Name: roles_id_seq; Type: SEQUENCE; Schema: public; Owner: johel
--

CREATE SEQUENCE roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.roles_id_seq OWNER TO johel;

--
-- Name: roles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: johel
--

ALTER SEQUENCE roles_id_seq OWNED BY roles.id;


--
-- Name: sesiones; Type: TABLE; Schema: public; Owner: johel; Tablespace: 
--

CREATE TABLE sesiones (
    session_id character varying(40) NOT NULL,
    ip_address character varying(45) DEFAULT '0'::character varying NOT NULL,
    user_agent character varying(120) NOT NULL,
    last_activity integer DEFAULT 0 NOT NULL,
    user_data text NOT NULL
);


ALTER TABLE public.sesiones OWNER TO johel;

--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: johel; Tablespace: 
--

CREATE TABLE usuarios (
    id integer NOT NULL,
    usuario character varying(50) NOT NULL,
    clave character varying(64) NOT NULL,
    status character varying(20) DEFAULT 'inactivo'::character varying NOT NULL,
    acceso text,
    grupo character varying(20),
    grupo_fkey integer,
    codigo_activacion text DEFAULT '0'::text NOT NULL
);


ALTER TABLE public.usuarios OWNER TO johel;

--
-- Name: COLUMN usuarios.acceso; Type: COMMENT; Schema: public; Owner: johel
--

COMMENT ON COLUMN usuarios.acceso IS 'Estructura: {"rol 1":{"modulo 1":"permiso 1,permiso N...","modulo N...":"permiso 1,permiso N"},"rol N":{"modulo 1":"permiso 1,permiso N...","modulo N...":"permiso 1,permiso N"}}';


--
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: johel
--

CREATE SEQUENCE usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuarios_id_seq OWNER TO johel;

--
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: johel
--

ALTER SEQUENCE usuarios_id_seq OWNED BY usuarios.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: johel
--

ALTER TABLE ONLY administrativos ALTER COLUMN id SET DEFAULT nextval('administrativos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: johel
--

ALTER TABLE ONLY alumnos ALTER COLUMN id SET DEFAULT nextval('alumnos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: johel
--

ALTER TABLE ONLY alumnos_representantes ALTER COLUMN id SET DEFAULT nextval('alumnos_representantes_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: johel
--

ALTER TABLE ONLY docentes ALTER COLUMN id SET DEFAULT nextval('docentes_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: johel
--

ALTER TABLE ONLY empleados ALTER COLUMN id SET DEFAULT nextval('empleados_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: johel
--

ALTER TABLE ONLY modulos ALTER COLUMN id SET DEFAULT nextval('modulos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: johel
--

ALTER TABLE ONLY modulos_permisos ALTER COLUMN id SET DEFAULT nextval('modulos_permisos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: johel
--

ALTER TABLE ONLY permisos ALTER COLUMN id SET DEFAULT nextval('permisos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: johel
--

ALTER TABLE ONLY representantes ALTER COLUMN id SET DEFAULT nextval('representantes_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: johel
--

ALTER TABLE ONLY roles ALTER COLUMN id SET DEFAULT nextval('roles_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: johel
--

ALTER TABLE ONLY usuarios ALTER COLUMN id SET DEFAULT nextval('usuarios_id_seq'::regclass);


--
-- Data for Name: administrativos; Type: TABLE DATA; Schema: public; Owner: johel
--

COPY administrativos (id, cedula, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido) FROM stdin;
1	V017515094	Johel	Alexander	Cediel	Teran
\.


--
-- Name: administrativos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: johel
--

SELECT pg_catalog.setval('administrativos_id_seq', 1, true);


--
-- Data for Name: alumnos; Type: TABLE DATA; Schema: public; Owner: johel
--

COPY alumnos (id, cedula, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido) FROM stdin;
\.


--
-- Name: alumnos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: johel
--

SELECT pg_catalog.setval('alumnos_id_seq', 1, false);


--
-- Data for Name: alumnos_representantes; Type: TABLE DATA; Schema: public; Owner: johel
--

COPY alumnos_representantes (id, alumno_fkey, representante_fkey) FROM stdin;
\.


--
-- Name: alumnos_representantes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: johel
--

SELECT pg_catalog.setval('alumnos_representantes_id_seq', 1, false);


--
-- Data for Name: docentes; Type: TABLE DATA; Schema: public; Owner: johel
--

COPY docentes (id, cedula, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, foto) FROM stdin;
\.


--
-- Name: docentes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: johel
--

SELECT pg_catalog.setval('docentes_id_seq', 1, false);


--
-- Data for Name: empleados; Type: TABLE DATA; Schema: public; Owner: johel
--

COPY empleados (id, cedula, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido) FROM stdin;
\.


--
-- Name: empleados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: johel
--

SELECT pg_catalog.setval('empleados_id_seq', 1, false);


--
-- Data for Name: modulos; Type: TABLE DATA; Schema: public; Owner: johel
--

COPY modulos (id, modulo) FROM stdin;
1	usuarios
\.


--
-- Name: modulos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: johel
--

SELECT pg_catalog.setval('modulos_id_seq', 1, true);


--
-- Data for Name: modulos_permisos; Type: TABLE DATA; Schema: public; Owner: johel
--

COPY modulos_permisos (id, modulo_fkey, permiso_fkey) FROM stdin;
1	1	1
2	1	2
3	1	3
4	1	4
5	1	5
\.


--
-- Name: modulos_permisos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: johel
--

SELECT pg_catalog.setval('modulos_permisos_id_seq', 5, true);


--
-- Data for Name: permisos; Type: TABLE DATA; Schema: public; Owner: johel
--

COPY permisos (id, permiso) FROM stdin;
2	registrar usuario
3	ver usuario
4	editar usuario
5	eliminar usuario
1	lista de usuarios
\.


--
-- Name: permisos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: johel
--

SELECT pg_catalog.setval('permisos_id_seq', 5, false);


--
-- Data for Name: representantes; Type: TABLE DATA; Schema: public; Owner: johel
--

COPY representantes (id, cedula, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, sexo, email, status, foto, fecha_nacimiento) FROM stdin;
46	V17515094	Johel	Alexander	Cediel	Teran	Masculino	c3diel@yahoo.com	activo	\\xffd8ffe000104a46494600010101004800480000ffdb0043000302020302020303030304030304050805050404050a070706080c0a0c0c0b0a0b0b0d0e12100d0e110e0b0b1016101113141515150c0f171816141812141514ffdb00430103040405040509050509140d0b0d1414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414ffc200110800c8009603011100021101031101ffc4001c0000010403010000000000000000000000000405060701020308ffc4001a010100030101010000000000000000000000010203040506ffda000c03010002100310000001f54000000001808660018311201b5a0900102400018310da0001aa4806d68240000000969663cb54b090699afbd32060c4486d682400000d796945f2755677a4775cba8e996b66a6eae8e6935e8183113b5a09000046b97a3cdfcbd3547a3c0c5ae584ea871cb57cc769865afa8fa39e57a65930664480039567cc3e4fab51777144faf9535e9a234938e3b3ae3ac870ded2adbd43ddc190091200065c74f1f7177c27a31ef12d3be08b5c7a45b7ad9d71d5ef1d65b8edebef47cc576a812240010dc75f23f2f639f27a2bb3ddb37e6de5bd651cc6aa3ed6c9b6e5f55f6f9f25d72024480020186de47c3a26de77b6ba9b2b88528ee8e35bf289ef6ca1be8795e9eebe1986fce04890004339f7f2273f54bf8bd46ad2ae396cff0096bbc434e99e93596e680f7f07a6bb7ce97ed86619912002156f0fa94673e88abd103f4fc979e4eeb13cef5ba566b0f57c7dad4b83cdf45b36e4b5bab9ed3eef3b646c1200c1e4bf9efba5f6f23846d19ede773cecf3c7d8aea8a7a1c6b6a9a70edbe98c6f9fdef4ff00d3fc0f6b57640000535e57d14078fa1667a269d134d56c1751ca5d665de996fa14eb6ba7dff910d800004f5b501e1fd1b4e1d692354d7cd15a1d2a5b4b75ae926b72386b8d9fedf82e5b60190000013d6de68f9efab619ba0e8c54d3a3baaa23251cdd539bf1dd9f43f31def5000000000a87caf6ab4f3fd7e7ad39db75d10e1963ae77b17bbc9b43daf100306400000065c76f33783f4ae7165a95310aa2894b13d1f2665e8f9ee37cd3d0af5000025c95d7912d69473df4f73faeaaa76af42b88272d977c62a7a78e5d978b29eeb49bd5a640004794d15f3647130fe8f6238eae317dea51177f8d16c4f579f2fe5f01e2f12af42f34f723ade000235c114df879b5466926d0ee9f4d96deaafcba1de9aab4bad7c79673788b0532cde64ddb7b0bdf74b821de64565e2e48628826bc13da96477dda35f59069e84a79fc39063c3dd2df6aa69cdd22cba2d687d06b25f4661fe62b3f1724d4a7098d12442092badf648b6d11a1864aa23130a1a6f0b5be87572e8b545f3d4434cf8d2394c6b36deb1ac384cab8b688eb0dd5d91c51ce639cd96d56b7d0ecdd9debdf272495af4ac255379d13c42642d5955253c95c4688dd30cebe062ece759cfd361f0f5db1f41bb2636ad7ccc78c66b33ba567d67545155f3677e9e9e910d79555d2849b2b8d55eaf8ebae688b5b9e3fab717bfbfffc4002d10000202020103030401030500000000000203010400051106121320212210141531302332401633353641ffda0008010100010502ff000a3fc38fe16d95231dd4541389eaad7366bdfaf6fd71ebbdb246bc377d64e365cea632c6eddec21dc1715f7ed4ceb3afeca8749bfafbd47a23d5b9db8eb55bbdd934ec5c9667767966304fba027e356c4f3a4bada2ce9dde86f29fd63d2d3f12f75b23b96b62de41b25dddfcc7ef3bbdc198b2e26832673a62f150dbff0006e59e1d56dac7656854b70eac90b2a47315e73ed4a7175e70152395559519e22a8d87d6f5f57b3c5d3b70bee2a56af000752190dd00bb11d3a0185a5ed627532838d79b18bd7ff4d71efd393ce97d7d73ff005c5cf2d50f222390381192384a8c854090afe05cf9ba51be5d2fafabd3e6d0a552dd8d8b2aa03f9e444d7dba9f2b7461db11c6ef52b956f6a9e5785db4b62576ba507b745ebdd75753f068eb43ac6d21692d83ad28b564c95560f20d94c046dec924a85c61ab48958c6faaf8eef4aefd0ad544f31eadd50fb5db69971156c530645ad60d9cedfe8d20edcb01ccdea236c28eb4148a758519b644364e999d948789591e9eb6d44c1f4efb2c87dfc23327c0e57e319faed89c1546560f7dcac66bf4debe5fb0fa47a6c202d26ed4fc4eeecb386cbfb60bc938b1b50491b50c3835403b98a33cc407dedfa1442857fa47a98806e6c552ab4f82547fa81030bddaa7277a9467e712fcadfd42a013de0900fe3eb0d548320f0eb81cc531c8a4b290408424782e9ca9e67ff1ee57e5d5f922495f2c101c85c6767c23b46747757542b6c536888a021369567d566c4564dddbdf7495cdb2f0b78d15b0fb4937b8c1bd13817c631bb3ef8ae5eedb5111acb47f92658fc937521e39c8f45baf16516dd62b33efabb7368b6d322679220b3bb15c94a9701907ee951dc72d62b851f6cd2bdd9225de31e8db6d574c2db988c7d7afb25c566a56fd714141fcc639c4f0392ccab509d8a8ed18f6c8e73ee45534764638b38607d36dbb8af8c74999ff007156ec3f3352450ab38da02d86ea643052c9655d6c2f0578462b1fc9c490159b634170bc12ed9e9f393a59badaf820e79c99c3fdae7889882cf112e62720672067266473be4b06b8c90c7b2fd829cf2333c174e7bd0dadb9a755873325f49c8fa4e73dd3c7101833c676c67ea0cb88fed5d5776437d8fa6279d7f543640c8f9cf27ca7db26723db25bc67711cac78c9fd04fc8a39fa73edb4d9c81cd9603286ce49673dd1d2fff001dd593c5833ec37171873edce7fe107b8aa40668902940b9a6801284aa5e44935e5a678925f333ff00763e040ce47a54bbb5bfffc4002a11000201020505010001050100000000000001020311041012213113203032415122051450617181ffda0008010301013f01ff001ca2df074667464384a3cf9a3073e0b4298eb7e0eac99d462acfe8d4244a36f1d2a5af764e4a3b224ef95c421322b6271d3e14aeec7aab2263bf6262204d5d7869fba26f6142e3a4381a4d04625ac2594959f829fb1ec914e0921c1325874c8e1a28e82234121d0dc74ac32afbf82972c872910e3b10b2912f62bfbf828fb1495e675230e4fee6246aa9672a9188abc58e5727ec56f7f047055211551947eb2518c16a655ad3461aab92dcbe58aafa382862357ba25151dd153f49616a54fe491c77c24aae1a2d9a3a72b0e3ac9616322349436896b21aba27878d52386501f16230d72b145c210949927aa4df7ff4ec45e0e83ffc311ca9112c5b3b1626613dee63ab2a746515ccbc119384b54484bad47514f819742917fd14932c552fd2a7a8ad5a55a7a9f8549a293bc5326c528b2d07f47a3f4d932fb155ec3937e3c156bae9b18b63547e9aedc17b9f0c654d31d2bc945daa214bf7b2e39366260e561c1af0bbfc1426d94f0df5e49d8d511b4692c69dcc446308dcba6cf9dc9d894ac46a5b8653c429aff627759d8b655f131a5ff4a95255657622fdd7b0e561a4c8c9c4a588215148593763118c51fe301c9c99c657b09dfb2f62fb8f916c6afd3923525128e33e489578c63a8af8a954da3c16fdcb5246a6c8ac976bcac2cef95ce4f87c164b3793f131f027947279bec5dd52adb646b77d8854d56be51e32bef61ecfb74b474ad1b892d0db20934db231d438344ff8c47b8f929ecec221c1ffc400281100020102050403000301000000000000000102031104101221311320303222335140415271ffda0008010201013f01fe12fe1af0b9c63cb3af03ad114e32e3bd77cea28725e750547f454d23a6874909ce24657ed5dd5aae8d972422e5bb231cac31924499095fb176c9d95c5f277653e456ec6864f620ecfc357d1908ee6ab0aa0a66a359290ddc6f28bbaf055e0f593252b8a562359a255db3aac955b9d535e54bd7c157844b81e6f2be488f051f5f056f526ed0141cf83a12254dc72b0a9363a32459ae48f051f5f04b11195e0567b2441b97c514e94595e9db818b72852d5c9568dbd58e4decca4f6b11af0a7f17e06b44da252d446562359a273bf23dd89d885571e09d76c6ee296943bc88ab24bbf154acf5acee5f34c6f29ff48c2d3d553fe78251525664e3a27a73b0d2fe86916ca25ba93d252a6a946cbc2e299256762274a468674d8e12191e4514bc78aa767ad64a6cea1d41c9bcb0b0d52bfe792b2bc1f63cac61a6a3723514b61b4b7642a467eafbaa4d538ea64b13566f6d8d55bfd1ae7febbd321574fb13abd56616fabbaa43a91b0d7e8b5c774425a87b656ec6d450ddc8bb146b6977232d4aebb71188505a5727226e06a42a89fb0e3f99a252b1ce6b628d7717b119292bacf118ad3f180def95cb27c1ba14dae05513e4b2e494efb2cf4fe8ecb81bbe581fab2c4d7b7c23d8f2e7baf931e580fa8c454e9c3618fccf2c07d4635ee979a952beecd09ecd15295b759603ea31dcc7259bc9c5a1d06a3764547a4dbe4824e2db214dd47643a728f288abbb0844b2c07d47ffc40037100001030105040902050501000000000001000211031221314151041022611320233032527172914281143362a1b1244350c1d1f0ffda0008010100063f02ff001dda546b3d4abeb4fa3547485bee6aecab31fe87beb555d1fa734e6b5f619e56a70a552fcce6a0bcd9d170b8c7f281b7c4a1fdbc62d763f2add1365c3c54ce23bbba0d538039274d427cc54ca94420a30460f100857d9ea1654196aadf86b37c6dff007dcb9e7212aa553f65031250dfa239853cd069c705b33818a550d970e47b9da9fa532a07d6e995224ae208e4374c2c1355d91548e62f54aa0bc39a0f71b69d5b0a8038c942e413af8255e6548f0aa8cfa4e0acc271c9301c895b27b23b8da3ec9ade410ea8529c3551a1544e848ee36881317a6379201eebf45e17fc28bc7aee12a0cfc2bc96faa963ad0398551a71985b3fdff9ee36bd9ecb9fc25b394aab5b927d670b6ec9530e6d9e92f168a6bdf4e1a702842bd36c322d18055ba94bb306c926f0ba4a62c8762d4da83ea6aa342b38db6dd705230ebed0c1807b956b1ac2e312982a3adb5b802994ec8b0cf08d1420715d0d46704c8e4ba0b7d8cc968cd453f0e8a8175cd19aa34d84b41370098cf288eb8db698b9d73f91d555a27122d7dd5ea637053d46b5deaa93c896511689e79770fa5505a63c410a9d217f144ea0a3ba5a3e51b707daa6db2c796ca9deea604969b210a6cf571d4f732e634bb2242a8c388742b564bf90506d023105a54e4af90acb03dc740c2aec106a90d16b58eeff0018c1c0eb9fc8ee985802a600f4570ddd21f0b3bcda9bfa09577c6ebd5dbea5bce22116b5dc4322a5c401a947a2787c69d675476017f4fd90ff00daa9abb486b226dc88565fb53ea170c30dd0ef958abdca1aa4a02531e5fc0d69b48db0e2c185a377c2b3643472eb3986ed0a2d7d16d4138b0a348d501cefed54b97497b9873d14f52fc775d75318b906345db8204754d31c755d9688bbf35b98cc2c03ff00908b03ba46792a5e9df87b9e31a0fc7ecacbc163c7d27a92fe067ee54344346ff149d02190d0941cd320ef34a8f154cdda22e9b4e39a337a2e1364e9f4a8a803d993daa08e21ae2143c0a832b58a9a7f05580d3695a7f1bff60af52e70685668d2754318e013fa57f4507c34ff00eaa80080ae467cdb8d0a47b4389d15f7ef8cc6eba1ccf2bb2586ec95e57e647a2932fe6fbd13aa7a9dc7dc8b9be3370524c939f5398dd8a899df055c3a94bf56e3ef2a80ca0ee8de7b9e8a91bf372165e66135953c4ca971e48147de56cded2b920ee7d5122255b26f898551ce1c415427e9172206426f465b76a9eed04ac715862aa8195e9be88fbcafffc40027100100020201030402030101000000000001001121315141617110208191a1c130d1f0b1e1ffda0008010100013f217f8587b1f69fe161fc27f80ebf0d9154c4e64fb9f29760845f69c9f5fc07dc8c6aac1b456c981ea8eec794169fed36a7551cbe600023acd40b70bb1a4ce25196ebe85d846bd623fe0f57d4fb6a6f723ed2d3956f73e3b463388a5769b5a8f139a39cb0fa32ae565d0adca6b143cf465bb01cb1f0846a513fe03b3ed3ec1d31a146b4bf0cff00bea35f5de73d20532376f79f66ee5a0821514e260b30645b7fea6929554ee61e3c3af27cfb08fb2f26b67e211de163b741f899307799615be6606956e32b6a6bd20db0b15d2665d7710cf431815132f0dfee2b5927c9ea47d94a6ff2d984e820ed2bd242cef0b56c8c6a0e176cccad2cda494e472b7fe400e94e1880b01a86f431f98b7b60fa63d48fb1257bfed2c3e8c5c3c28f72a96b31d545293514033038aae5946cee2b9802fbf523ec43d827e7037a3385a8adf39c59ceac1004ec9d0b8993236cb3a42ff59a941f11805aff0029abd5dff2f523eca7ebd6d7d177518a60da08557684ecd028c3cf12e6c53c6cb47a2ab581821bf9997338803fa9d04a74255fa2e6b9259e4b7540bbdfcc224b591f423ebb897ba8cf52342b0f8e3cf0efa42afef529daf70548868b07c26070988308e7b22db9187ef150abe6ed81982084162d7c43aed39f732a5d36f8f53ece2097c147f9fb8e99ccf069fd47190e119c4f0461b5179880d2cd6276492e6008d49d168af9bc7ee376b49cb4f61f60d7bcdd497f5b854d0a941beb072b7c130c970800ef15aaf36c6b94e4bfbb9d7009492b98f88144d57599be7c9e6f61f6a54114229f30544540028341996bd1e157e216d179ff008896b58697f511585b42bf139fed6305b5a9501d2922df9f611f703b5a4fb3e66a1e91c2df89ad5bbe25c5317d641bc2a27777cbd3da47dd4e65a9e4cfea65b1860a9d1083800975186fea205cc43e516b1b8e98fcaf6941311574be923ea582f44eb3eb6307e607d86041f46e620342a09cbda5ef662c803466840e3ac70c6464bfdc13f74b24a8b6aba7e608046b1edda11302d1a1f53ea8b593c0f4812b51aaff0050261714bbf0efe23d2a5e5e50abb999ea28828c10615c519ebf7f8254e867ff005958dc4d27b30f221f43eb84f5557f297799ec3576e605516c7fc5428ee56b2798fd7cc4d03bba916fbbc3492e17289ccb0b5a2205dc3afe88206d4ae9198ee3a71e65ee47bca91da5753708503a823e96a4e81a9b38ea13164f2b60525d5795cc7c3349f92087640a91c0df03c3328bfefacbc571e230001ab809956c5803b56a2a005b1fc8cc7c432f4eff00d251b2711f22bb442daf19a003174712cda8cb373cc5479fc84312b0ec98eabd6cf065c70e16e374d13707c92177839bc4cd2bf9a073433661e0e904a79c22b1cb2d3a9f457f233f699fcc55b095d63b6e31dbde0b548575200ea26a179423e32f3aa56e03e23a09802390e4584674371787d04015c9abea50b218d698e2c63a29798d51a98fccd92a91570123be20ed23aed2bdfb299afea72a7d3e3503b7bf692b6b6fc4a4184172c9da2e3de5ad3ac5751a29b8c060c18533202bf52e4ef418fd858a1649925324ae71f9d2c185a6df130be050c6a59ed2837d9859717197ffda000c0301000200030000001080000004a4bef4c0100003d24a7e600000207725f730000052dd2a5b180019c42410644c001fa962b5f25a003f44a945692d001c35c73cee96800a98ea8f3c4b4003f0c3cc02fda00a27d962ce3fd008fafe7703840800fefc35a8684c003f3ca7f02c020004576b546001000004d09e802480002632ca62a24018515896c300600715c11b5dae100bd1fcfc70f47821aebb74052954cb94b028a6ce6dbbe68c2e81763e5a36025f355c4b228735337959ebff00ffc4002611010003000104020202030100000000000100112131102041513061718191a1c1d1e1f0ffda0008010301013f10f89ec3b1f8ded3abf0f06b836d547c3538877bdef7a4a3c5b192a722e1e2600ad406ea98bb34ed7bac78203c1155c3dc3c22c20f1366a5ba96ace1ec7b6abda51e825d2008cbb26c1a6ba029896862a1f09b81953ccf0e205a43d84ddd8e8c1f295973289627c06edf4c1a4c11904d96700a97b156b862b494120e06617c1fd466e418e890ea3509d2016f61f03e3ec6529ea3914d387f89964a815ccc16792a83a20d476bf5f051157350ec501db1ebaa2643015714ab88b112861331e60b486999154c7bbca4044fa3cc0149914b6e6793833009a4a8c31ad604b2540f100ae0ff0013ef157bcd8e9bf8729ffbfc4d138e26cc8cb4e2565c39a9466232a26c3f1fee3b1a51f839e971ed3cd492d9e7fc84aca046e9ec958628e8ce12a29c4bfe632fd67a3e1c11c8247926339c7fa7fd406718690389fe98724012cb8173e30b1d3882c8d706e11028453d8e527b41f92cbf7102a39d253e26f9986e0144ca78b87dbc74a6afb82e05861c288853f13922bfa824a7934db3854dda78f965b511ee5cb9778c978769467078872206c142382601be92f4dcc42c54aed796372d86d933995f303c60b81034cbcd5f7112b73330562793d13d510bd13dd05bea0868fee14b18de301f0fdcb11c8bf045dd8afd11551b13b592a1829c44a6f45afcc7ee2db36dc3888658c60dc165d2996dc7d98b6d95a6711c60ce30f717cc5d4710e83e2393c4bb892ab23da998a2897b15906a6258f450e25c5b8762c388c587b9715d94691e8e516d86a3cc6894c0c63ace0a8b280a732c89d8d236780c8ee8974a644a302aa62f51628a2bb4ffc400251101000202020202020203000000000000010011213110412051306171a18191c1d1e1ffda0008010201013f10f89f0df869f1be2f3a7c3d411b286e7bec9bc79e9e617b4d9ba21d8e733c11ee22b510abb20e2e1f1d3ca9ed5fa8e6f651895d446e0ab66f64a32ca1c4a74ece59a78d9aea5bb05803296092a998958e0cc80b26a653c0f15a23377a8eb664c31e8ee315d5c132cca97e199b6a50bc9e2aabed205823a622c713922628a4600205730ed22b3c9e3fb843931e62c18a2f72d2d8b332bcbe3e9793c4ddbd242466a9316c994622cb3a9ab9a62e59a13229057f7e4f16c0de2e510a66021dbb613ce2a6a3543cd43cf24fa8667299460896461e1b9f5031a8b1dd90ec47cd45925c82de53a98eae2bbee590edc4fa30f3f433bfcc4ea6a5c826396a39d4522b0cb0541094c65febe0445866591dc0bd417014b1b96dc60b60e96f5047f37dfc3b9331197505b53e8fd9136aa0ba208b4fdcde1b012a10cfc6bd03bfcc184972299da45b665faf914ffa895165c44b994cfbb897b436ca22e9657928e8998e9fc7f98bfd3dd9302298e6232fdc73a8116608793c1367aeae554718f23570cb15307a4fa878f702a318ae19956e2bb78086201f778b6ccbf530e9c3169637a7ea135fde385e447116058389962aad9ad42e2da65c849ac790b3e7b7d446ccee64441783eb877aa980944b388fd1380b68850b55156e5f99d882912abf6f15d7cf6c58b1dcf68bdc536dca988b2c98f52f58c45c54e905621367e588cece08adb7933a9ac72c751cf3b6399b309b3f2c63e9316a259c33a95310c45cceb9a9526cc053a6a0666cfcb3f59864a8335c2701c54a252ae236cc78585ffc9d32710af9c04a0f6940829253b894b367e59fffc40028100100020201040104030101010000000001001121314151617181911020a1c1b1d1f0e130f1ffda0008010100013f10dbff0013ccd7ec10fa399a336fad7de5f6a53f5d19b7df729497420f816d8f35855c13c2bf3159aed7b82cbc7796d4e71ff3665fd52feba336fbaeaa4add3d0e9dd8a12b01236579542ea05005222f697a698ac9a6cca0b6c72c5c34240abdc2eac3ce61bb6c96814a2554058d436c6c26fb27244ad86179f1bb597d4fa8b3e9a336fb4489eb11dc3f83997134de8a2c15819c1de5f39cdae408f5bd9e22686aa83a069bf15280b665b325401d686303d3fdd65c0080455bdfe2042b6d756cd1dda251acd4db96c56ed35008103d5a7c01f0890fa2749a336fb36c1df01715c019bb0341ae303eba183cec96416b57bb8f8889589130bbfa237d28313a2fff0025cd5546cbc2c0ea404e87fccc6692873c63f131885047453f67f31c6da2a04223f27e632dd0e582a9c223a6bcc3e950d5cdbec0102eb35591158a42d24ee316c773ac555d74397958b70e29154ca550ca8cc405585ba7f9942a81cb46bcc0af0a0ab1e91545078738e9e9208b6596f94f844f8223c601bb029deed2956675d0fd749b7d8ec028afb07ee62ea4379e3fa854955ad7f11526829d722fe089c640310df3daa3fd544f6cce409178953614d78b6ff28334ddd0adfe2a5210293ae3f70442901c5e47fbd467dd9ecfe9f5d26df63af263d718e3500c3972fe6fe25c77c5164a4c6220d62522cc52120805b5308835ab82b45ca7923450008d7fa92001403b0dfdcbfa6936fb2d9811d816fc2c06329aec0503fdd6250540cd3ad47905a48f631434758222907695ac8f010ab0d54b5c786576b154d585baf3d21bed8cad52c9e89fde0b8aff0010583349b7d57d42bc2b34a88770e6617cb2e56b1ebf714d9ca35d026b3d84510c31a5e56bac6414605dd0d26cbf8c6eee73d90c5d4b9e4de17885d4fd5ce156e1c98c716c7ec7060ead028d21765994976850565bc70903ca20b15fc27c43e9b452517d8a3d41f2501a474c1a7b4d66df5402391c24b6721ee9af921b8215720ba7b96474046468bac64974941c8c69d96a299288c829a142bcadcb87650b8a290ad1c8c0639f19b5c801cf2330a17959d2aa3b5cb0434cb350ce316d05a03dc54ce172ada9b7bccfc4ba6ed00bf88e66936fb1ff003510fd00947922cd86e3a548fc35ec45630ae122cb09a5398723a69971145af1ea272db6a5d4715b3c3c428f010a4e45977e66ccad41af50fa340eb61dec1ae9730e25659ab36fb10597449fb897bd657285f49f1170ca447cd8701ccab492e35a6336f95aaec4bf2438d5d5d01f99f5022ebbc4c69bbe46230db6010ee661c5547c95f70d2e53b1b5fc0704a8989a4dbedbed29534e1166f88f1958ef0a455e376cbb902aeedf5c998ac0c820717adf74a41020582eb51954e28ff5528115a501aa129e99862d9c1dd6a6273c82a2b34bfab359b7dd607000ec8bb0fc9dc84d01b730b8a0b11921daa6960b7b859ed685afb6369955acbe6260657ee2b1a008f2e3fb7afb337da1a19b7dca20a412c46bf912d104e54ebc7520c49925f36a53a00f3170cb98148bbc1dbfd478128438b265882943606a1dc5b081d55852b20960f4be7d7d39cdbea1d13beb8214a87adaf3411d1821b66c5b3c08a59a6d815405947577e221c51c08d30d11b343f64305cea328921c9cbd6e2a7d17999b0ddd411e3953a6385f9bca595ea69e5820900c83182be5cc0c9e9e807cbdfb466b36faa754906abdbc5c54cea120d5e72fc438a178edca45e4cacf92fcba3f46668b76036399514df66160616b12851ee8189c102293d07f25fe399614386edea72c6ba29cff0052e2c78706fbc7cc1d94fe268cdbeb504e9c629b46bc4b452a98237d15e9b98d99a14bfca881c15faa06c622216867b878e93f2c5a95a69de18df908182bba150c36ac2df70783fa7773026a51340ed10a65cc669d56a05301a599ab0d796a5f142365dcc7ea0806116c9b7d0f2c0959ed0f5fe224d52b725bb6ddc75988599f75a2386f5b5ba576791b1a14db2fff00a5b3c4f838c8d78818ad514cea727ac4dd3902bc2e4f12c510ce2b3c68fba87b442caa757a12a588a19fa83b7bb2a5019ae20667b180797518572ed3f9bd1108c50c16b6899f74f328962da6deaf57bca1df1c2d5fea5ddd072df04da71bc1f577570cb8b4bb04c1ea58b12ab0b05231ea714473c2fea270a08814fa818b94457ebfb3ae18b494467f40446bdf1ff621b975b1b99a7b51ff00040880cd347c8de7d7a8b87e8e5dc98f40942d653c6e751d5f8236a858b4ba5978ff00744a1b53c2b7e86623e6728a5a652c0279dcde579421e5984e47644bf9080d817a310141771882ec2e6777c97b821c6d8b888a5d4ca114b2b575085b06023ca52c5cdc56ae2b36b8a584bfef07e08ba2e63ad8bf886cb7ca4bdabc079836cd1a9e72f0c1d1e42fd4400897a221b49a693e12c77f189423d0cb1a029752c736129a32f1e65004e0a4c069bce72f10af23df46cbcdd8cb7f471414549c25c2046d0239d3367e0889894734b6ce17f5373563ada1fb824d9923a07bca0bc98cea8e50f35ebb0ad7c9f33035d2ba3162f5abd7494de6c962878eee24d44aa32e0f5751e52ead5478e63679416969c9de251530bd61885b5185bba5acf36baed2b45092d54ac621b93b0f217ef5f1da193b068f11aeeca0f144ffd9	\N
47	V17258026	Jailyn	Alexandra	Sanchez	Lugo	Femenino	jailyn8@gmail.com	activo	\\xffd8ffe000104a46494600010101004800480000ffdb0043000302020302020303030304030304050805050404050a070706080c0a0c0c0b0a0b0b0d0e12100d0e110e0b0b1016101113141515150c0f171816141812141514ffdb00430103040405040509050509140d0b0d1414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414ffc200110800c8009603011100021101031101ffc4001c0000020203010100000000000000000000040503060102070008ffc4001b01000203010101000000000000000000000304000102050607ffda000c03010002100310000001e49cb54dacfb536d5852e4967ccef63c64a758e699d6ab24bc66e395059a39869059929e260dac6dabcea057a926098da9175b02eb14221d4275a566379f1d8423b90c349307c07a6a97960eacfa4c5e46b2099eaa69dad289367738edae0bbe0ae83878c7095b7e6e22688839e0769aa5e593eaa5aacdc5f6dd773e9a32e053261dafad8f591b099b8f3fb6fd269a97915ce9f9532c2640eb354ccb24ca22a6662bb7e8d611e46cf060d876adcd931137ae8310e756e6fa1b1f3fa497a7e437371cdd2fead53f0ded2112a287a59fb4acfcdd2c7e9adeb5bcd495ac6b43daa70cfdc785ea179530ba1e2cda0e6f54c1b9348566901bad536818bacc9a4a226b15b9f3b37065c556283e93c8f4574559aff5bc395496d72a387e6998a374870e31579045f5dcf9db019ec603de0442ae737617afb0b1822756e3fa419ef2431f87beaaa62e84f59ad97bb5d679b9b24b8d997b9026b2a6e5c163dbf32c599b131c35b5eb8fa8ef9bd6bc0d155d0f1f25dd4c3d11e355c63a2b0bcfda5ed3678187e874dee2ee79970aa7f8b6f8aa76ebe64eb7347ddf67e5755574fc04972ae1e928d3f5c6763ed6cd137ad5939fd3b4a8dae6d57a754451cec4a30c6f1cf5b4b9c362a530b75ee37a38fa5f3d2359ab83a48f7d4adb6b69333513d9dddf9dd7eac9b08cc2be915a685a7c03373a1bb8bf0726a98c0baaf33af03be14820aac0ecd60bd35a6e7e35ac4cc946b6f37b1d5513db7772dd5207ab0c9d0ed75109c71fe7f226c7d191eb10df8890aa5003ec45dc0089c3b062f3260d67e7f66faa31d033184ae5d9d748a9d062eaacbf32f638f58174ad4bb2e5ef0fe227425bde7ab7aed6587404dade92c48f66d69b7d0311ae6d1555fa62c5335038be5bea28dd5edbe0d337fc2e0c855f91f54df353d689d6579450955c454909ad81d5a6a1b356dbccb90fce9d356bd19242f3d0db57fc278e823e47d461bb2eb7acade566acc1ed4b5ca6780d903abad69c54e54dabcc59a9307c512d8bb4edbf151b5c9e70a7bd62bb92d6cdc165bb0ee09a1dac45ac37ccb325aea3995e617e26d8a7cb599a860fa5a1d32ba1e0616b9544e57d524cea3dd6fa0e932e0455db1ab615b52dd2ac9d4837cf52c247619244e62f3ec67a38864f47c26d272f4be939ce0edf9a1778c87d0c94fce322b779d3088f80f0192c27457152da5412ca19fa06fcf1edf9d92ab95a7f436206cca4c573c86d64523f4d9a2cb74a0bcf722e93753aa05c876208dcddef52d16f47f20c4bc792679821f496e060cce95b3c54edf00a1bebefa6c82d8bb089b5d865b6407c1b143b5a58762452de5f164e9292e737e5fd31c51a3d2215e93b884f129abbabb2935075719cc461e3347d1b6b25849cf7adf885f9099a0c9273ee4fd3dacdeba525be655cbd272171435cb82e8b03b89470d92ea63595d9be85a422eb7cf2011cfd036928dc9fa89f58d6f4bf6a282699e37e2ad08dcaf39c77207a290cad0372c626ac42b35ef1c2b5c43a83bdd7ffc4002a10000104020102060301000300000000000200010304111205132106101422313215233341072534ffda00080101000105027f9146c83e24fb43f2de71129196163c8fe0bea481bdaec8fec3f04fd85d4fd940a4986363beeefea49d0dd7171bd9514832310b8aca3f82fa306587b33a93e43e24643d95864f6ba6c46ee595b3a0ceda658768d417dd9ca26944fb277f607d76c2ca91fdd13fb5d0ab92682eebb60acb0a2b644b732436258d41ccca055268afb573789e581a51cf689fb2744d978dfb2675765de532606926291d33212c270dd7a7c3019573e2f900e52184f66b03a942fd99d13a27c289f3e52cbd18e7975444e4b1e4cd94ec80b08c5dbca8db2a56a1d668ee8a8be3ca4750fc670afd9c2cee4eb2b0a3f6b30392684d0c7853369210617016fab54046711f6bb3f91365c3b2b137486c1ec6c99908ecfab6618366adc7ecf4f87849ad787808797e28e0503318d699e85b826677ba389c7c8df0e0ad4bd491fbbb3266d97d06289548941061570d5a31d95ce3a3b95798e13d0916b6a0e16f3bbdd1cc6de52b779e4e9c129619bc9be95a3dd00b02ac713aa9240430749d471b218471cff11ea22bf09d2b55ac696d8fab45bca657beb3be49327fa71d0ec8e968ce5219d5f0d5fe423a833d29f89b0722e4b92fc70dcf194f28f88646b7144db1f1d26f4049654ff16e567445b13a1ecdfef12fef840670938c92bcbc1df2e35b998e316f0ac9fb39fabea0f8e9e0a7579fe21e8c153bbf05039f139eecead49a8ca7db5c2265fe47ee7a05abd097db19b13382e47fa7865b5b934032c8f5638dff00e40919a3a9f3e1a970e7fd594d33ccf86152f6327d9dd41f7add9f8f9fb5525666e8c2c65c8170119472cb98a4b2f86f19def5bcbd60d5b89fd56a5ed365346ebd2ecf253374558c53b3b217d4a091539752ad7585391591fc375a5e2f847a472b6adce7331f1bc78ed3c95c47abc516d34cf995930658470a30d9fa2249eb446bf0d1c89f8b92055a555bdc7ea250184f9190a3b5c918c9c8cb20f88f94fc8db0ecc2585407148c3078424128632fedc750810cc0698bd394532bf074df8eb3d41800c8a8d79d3cb6615e22e7099619323ec2c3d2a07ef5aac1111c2780190582c6ade9c642983551caf195631986d572e3e7e3f91622af7c1839cf14475a18c9c8fca4eef2cefd591bbe1080b314fa3f5b64d298269d8d0750e29eab2af65eacadff006159e368de6af288eae0a25fee5337ef6feeb0b397712c435c6c31559221791c4a62cc70bed0c8ed2b71f65ebc9208ce7abc6f2d48e74f1140f9597527c447d48d93266402ced0374ac75bd15ab10b4f56b4997aa7d19ad418924d950b7ee16cb1e45f6ef2c7aacfb5ff009421d204c990c7ab3c6c4fc806d1f1b65e0b5622e95cb8cf980baa1aec8e178de1b271b838da7367677ee823dd30688bfa26510ec4eeb5cab0c643345d44723dd2e9e5eb3e8471eec2dd46e8bba8e3d48f6cc422eaa50001395e427fba6509302881f578ca52e4df5167c1c30e1ac7ebbf6e3762ad2b297f44b58b73b02104925b038e00eacd0bfea6f9c7bd8561451b2c76ee0ad91cae4aa4d85ca41b57883ad0e5e03c7ac86b4cf149c97febff0038e89a2688b2c41aaf8919d7caffc4002b1100020201030304020202030000000000000102031104122110133105202241233214514271335261ffda0008010301013f011fb707393b726384d793937605252f061ae91f048cf5621f49673c15d1399468b8f910d3411fc6aa43d154cb3d3e12f05fa0955ca39fbe90f04bd8fa3c8b9f069b4ce6b2c8c55488c9cf932c8b8fd9f12382756ff26af451fda2875ca2f922f825ec7d33c60d2d5990976d6112b57d92d46ce223d4c99dd9b3bf3455ab6bc956ad59c0f0d619a9d2271ca366cca25ee6b93470c2cc8b2e4970596393e888b1a4cdab0573edbca28bfbabe5e493f8619acab64bdf4d7ba7927676e381c9b31d7c09e490d144dc27922fbab26ba0a51c92f3ecfb1f2f112a8aae1ffa4e5b9f3ece451c8a06d4d7231a3456fc705d1f8346a21b65d33d1f834f4ff932e9f384604ba24460280a06c27518ff0012993ae427dc3d4a1b25ec49b9915b61c12f22e982102303698e8f925547f61f9e4d2d87aa569ac99eb4c73c93962279e88a96451c19c1dcc1bb22e99e0b51a79ed91ab86fa727dbeba75f126cf023ef053043c936d0a5fd90e929450ede705be382ace4b1e74e4b893e91e595ac4093e7a212e4a87c13864ecf242381a2716cecbc96476a34cb748adee4e25bc592e94d4f3c93585889b79248c90e4acc67d8fa2f26a9fd1a44d728a928a6cd463b8f1d20924325c0de7a5657ed7d3382e7ba5834d0db123e19aa58b1f4548e8dc4f48c9696c44a2e1e48cd2655352f061af3eccbe964b0551df2e4daa2b82af0cd5bfcafa611fe86c589225a584fc93f4fafe8fe34aa7942937e7a67a31b27cb298e094b28a3f566b3fe67d3b9022cf27ebd13c12e517424a5946e13c79370df0672c6b923924da4478e227a8c765f8e908c9b25197d0b7a32fefaf730654e24aac3c9c1be289cd3f043963889163f1125f8b0d9ea172bafcae894626ec47288df0c726e72e53373212cf92daffea5739572c4bc124ac5f11d512da1fd093870c81bb8149e4b3f78b3d5f532ad2506672db19dcdc4f76308d44adaa4435d38f069b52a7fb16b4d6e8954b312ff009f834d7ecf8c8fb36a65da6def28756d13e08792d8f099eb32cca28c60656ba6b288ce19c1b31e4aac699a7b14a1b4d34f649c6c2c4d36e24b39c94ddbbf61496383b9889b558b92ca5a97028a81bb744f51939cf91bc8c80d702f9c706a34bcf05b5ec3432c726b23b713453253ac955b875b8321660aa719ae4b64e3fa8f7e4c7f66a2c554382eb3b8fa32079e0bac9d4fe242dee432cb6953469e9b376d44f6db0edb34f2d92d8c9471cc4c297ec4a95f4575ed30c4de7935b63ae39896eb2db1e33c7562133591f864f4f6e707fecf0f05318c67913edea1b65f538cfb88a6e53582c9ed9608cd129a3b86ee326aea7656c70d93699f5d1f4fb2d8ef8e19a7a63445a8a26b2572fecbe0f3b85f96b32e99f04ff2acaf254dc78996673c093625880b2e3867a8e9364fb915c0b323727e06cfffc40026110002020202020104030100000000000000010211032110122031411330325104226142ffda0008010201013f01f3b3b1ef8f9fbf2e1b6bd1da429d7b2392c5bf2a2bc1f0d1d46ab86933d7a31e475b2324fedc51d0e8758fc9f4a2c9ff001d7c1931f51a31c84efeca8d8a2972f67a3b31c7b2a666c4a3e85a6627afb11889792e3247b226a998a42f5e51562545f868b476df0bf47f2634f42d18ddc762f08a2287cd8e44b20f20b210c9659387644f4607a1784508be34391398e6596c8c9a21964f4c4f466c6acc4e9d1ebc23e13950e56559f4eceb432c8c8c52b4658ff521f978210b9cb2626428d13a24463d88e1463544f686aa7e1117865e2323b9290cc6e87912212b244d7f617ae625f2ccbc2e1f2cfe37fa64667d5321eb94217123215cbe5186351272337a447f15c761e4a16416445d9ecc911a1f34518b1f62faaa3d93dba21e8a2c7b365b14e8faf47d44c9fb194514455b31c6912d895327ecc7e8475653e68704c5a234d50e143ff0d9b2105ec5e867bd92ab313b422549119224ec5c5fc1d2caeb23b292a258e49e8e9231e37f2573f055b31c7aa10e526753a9d4a43572d1d9a744a299f8b14ec5315325c33da31ad8d08aa2c47b1c3f4455125b23a44e225ae23928ef67c8c4416c6224cf4465b2bf5c4bdd928fc9197ecf64e2d7a29942173118890f65518e6356511de89aa645d1d90e36355e1142e10df2a93148b47a26af65ae14c7247647623b231497287c22b7c5ecff009232d75258dad89761aa12ec741aa314b65dae50f8b22cb24be4c526d6c7a99f9223fd74492641521b24ecd2f461c96b66be0a123fffc400381000010302040503010603090000000000010002110321123141611020225171133281a10414233042913352b140435362728292c1e1ffda0008010100063f02fec010fc8b950db2b92bddf457705621771c839c286e68df864e5727f75d20c6eae2fdc201c646ea5962b7fcbb4b9693b70ceeac485d7f88dfe5729a5623fbb27fa201ded289fd8fe4c4d822735b76e4959a0e63a1c35088222bb73dd61fea8f21e25dd97772bf2c716556e9a2f558e1118aeb2f709f9e7c33ed57e4254f087028b623cad90a64c1658a87677441ce79773c6564a27f646cba9648f65d6d3886a350bd37e7a15d43a5f63b2179254f7e5db8c05121ab2592082baf4ded06d652dcb551ae9b20c79bb2c9ae1a1e4f2a78842d3c3de0140e30843871301385c20eee86b6e46a8e210409165868d069be1929ef6617000b8161ed9a12fdfc85dd6229d145cd60fd78724dad884f640aa7bc8fa720d913c25468820d4eb4d32646c55421a31bc462272f8463dee38bc2c39ac700e1369742a9f782d74d2f443224bbfd5a21527a0bacdec9de17a96386ae123b5b9206bca105dd64ae8385c14f05b20e8acc01506f7722ab5227a490613fcfe480822539ef706e8026b4663546d62a51a4d3d34ba7e75e157c278df93472f6fd55ec7885bad901162725fc775864b11556b1f7010d1dca2f7dcb8c929a1d66cdd55a9a5d1e1a70d964ba816ae97152c77a83b45d762821e9e0779287a54e9ffc9077a0d0ed774f6d4a5e99f32161066853b3773df81f09eed4c84787f996846b2ba4fc70bb54ce2a67750d270795f79a57664e1d8a89bacd5aa220f5277d959509a87de7b6dc4afb1803a89739c76d3fed077700f099c29a5a735d50a1e2ca58ef84464af1f288cc11703558a99fc33926cba10ea09cca471d73d8e48b9c71175e78b0772becb4c343b0b3065bff00ea00640470b9f83c22174b442ff06a77d0a9aed696e8512c32a6e9cd9cae141f6f70a5951c47947167c94fc8557cc0e37b9e117dd63a55096ee80ac05ff5041d7e9d13836e45c22a0ac0d649f708d5a8c5da72589aec25757d14f0c4153a9fced0791b6404e16eaaa53a9fc37ae8b9a778d961722c718c273448f6bee0ab8829a262a0f6bbb2a8f7401faa34dd4e9b29375232410b6b098cec38f953a05dceaa0e63543164aa69a81dc21542c24d941cd4841ed385c1431bfed50a1447ec994b373aa03ca06c8f561ba6b9d62148b382a2003ea36c51a2ece20f94587308d519a8e02f7582a37113ed2335d6f8d8058cb664da4ab99e433995d59ac21d174d6eb854296eb64e3a3fa90acdf94083f080d0dc15b95789ecbdbd7a20139bdb97a948289bc26d47788e10724da805d87e89c3390b641adf70bb500734ebccf0f50e88a0ecc1e4ffc400271001000202020103050101010100000000010011213141516110718191a1b1c1d1f0e1f120ffda0008010100013f21c27425c410294cbd2c45763f697e180ea18cc26bd2d4cbfac2c2354ae2e8ed64d2ef3d4b1012b4d3b60c29b0e65f31827e042e29ec730eba83e571466203a6091c750eccb89713040b9671d14bdc06a0b583e66160788b8790da35e266c8d913a430e270f32e51c0dcfbc99096c2363d26045728b0bccea5b76ef71a5b038d7de0cd3e017f78860fab01b43c0239f4c976673e51fe44b815b91fd460f25665eea43273158b86f27a5a3d7b553cc5943302e0cfa6172cb8ad74473304b366187cbf1296e316e26ce095b67638f38349c38f1633b8be3ff8295a30ee5ced381b5b671d47f3b609885cb582e09bcb1724539473e97b56f3d8ea25639a0dfb7da515e44eb947558316266612e08291fd18bb328334468512d1365935644d02df2ce41731299d5e205868c2e756b2415d46ee38fdfd268297e18afc66075e219825fa01a43bbc046616ea6d3638f893edb876c204397bc23e1d4b4a1f795500b0265817583eb731528f8fe65d28a8e2a4a0bba97a747ef34f5263bfac54ce1822b196311d55db2f0b89e635d90ca987c42b34b2a06621c3888822acec61afb61cc48c31cb9471331cb27a844bcdf135f59659caa99e660fbcde38db304ed8763f24005c7a70e159d389b82f5715555175655d14d11d008ca6706f016b46f369c4c264274b113a4bc44b75d45af88f557a13c3e15a559744026df88dc09dd5ea5e508145c405cbf08fc0d5d771531b3622e2f12c2f7a70bf31ba8815b502c7c4d3d2029c27957d00ea38a81439330cba52429dca03503ea0c552df9a3968566f9897970f56767fbb984b2e65c613d0774c39beb68dbc8a53bcc57656a2a2f30dc2794d3b6fda1441c3530c3f354b505b94520650d42d91f047acd4cd5e6a13122c2c007884b3a5e6e523d04812159529605c22b9babd8ffb0daf8a8b9716b5d7ee3fadfccd65c4984bb89c84d04545131c628ec13e243a2541712fb236b1528cf9146d22cdcb81be215d46416b8cc08ec13f14657ac708e0350e95f9603958d66989adfdd8728b072752fa8595072d85bf08e9bceecc408ad9c8fbc6c87cb1953df0f47fbcc49cb88e6e39ec4b78896f48b7e7f92cb77798a66ac7ccf07e63537f23116d2fad4d756ae0b7ced41831ec204252eecac952c95522b853e1fd44713bb32fb929bd6f607f9e2002a6ec819deb7ee1fa7c415563a86d3da57ad54f9944e38f475238c128200b9200c923946098eb6b8772f170a1907b4da8235151977b5d930c319c6f0b863dcb872b0382a22736174fda2cea199ae7501207669c0fc205b0d623da17653047a399c09b2543aa6560953907fd985466fe51065474414fd040556227d10ca2dbe9ed076e72312427dc95f214167bd976c565ccacbe9f0d660107c00980a2030a98ce740dd929ca35c432954f11f315bb8d2022de5f525058983b84a59c980bcca0c2f2621be98bb4cb005c0f10a4dbccda0c6f5e6066eabf98a98d971ea895d6bd08cf8830009d6dcad5465cd26718a786a6500ae36e2fa9eed91b3981da752d459d764608da69c98f13e28c9a446b998e0f0f295f02375d66f0c38e04a6555c8fbd53f89804ca645e65e49b73533b1dcdebfd52c6af5bc0c7cd3e71cfe9b9882f87cdcca228f2cc6ab0d47b800143ccb509b67b528e5ec1e7c475134a5b4e8cbe0d2155efa46d22e3b7ee947f18b2f51c36d7384a1f8109a183e52dbadb6fc4bbd9348cc5b312004655d0c1c811cf0c6a7096a04c699c4687845e98b6a59696a9f11957375897c06489b0bd456c741178097bf10e3d159584e661231725d856821e366927c0830060d6efafdca792c711a6ab1dcdf23f70aa34f0c0881e655142764372877acfefccb8f862d9a4b4bfd7a6207031aaaf40f451814625034f03820fc9daea10fb67ef7ffb0196b50740ff00e12f7bc2bff7bc277657be39b4c54100707baea09af524b962c1bc5d574460339e26cb452bde36c3c4ca704328e2ed78d10c385aae650dbe48e081551e2ffb0f7c32d99162e7b613edff00651cd2c08d9056892ada9b242350b913336f0d120640a33846275cbcd4c660c40688029fffda000c03010002000300000010208cb5d5e979119b7c20170d6b6ead8ac9678384fb446c3f27b061296a53669c4dc515199550f618724f62a881d56b9779cd0e66955623dc568734d124ea53ef6617a5ec6e4f137d3165a44c83afff00d74d0617c76c9a12e24b55bf6a28545890ca5dfa29cfbd0addfa16024eafe32a8c5a2825271e86bbdc408f12c54a3aa3c3d7448d649e9537d2a7940f1056f81fd0398e5a4718c89d3288eb43abe3c9ba2bfbec9e11ef5489d36325ff0036b5e6cbe58e757fffc400241101010100020202020203010000000000010011213110415161c1d1a1b17181f091ffda0008010301013f109231ccb8c49f12a418205c13382c3d93ec2e023c15b59bbb84a617c77f0ed10799e920e479d87e49e725d547449190f1dfc76f831e07375726fa99c7b4f3e7fd5c3087c3d713ec601ca15d4b3c7730e3a49386e7cbfb937ac4ac932c3e3b7844292c803c5d0a6bd17593ce23df91d70d3ef69494269f3e0c786c8101dc599342bce636d4c1911b3b14935722e5697f8ffb617b72e81d9fb9e47615dd87c3e30a161ee7f9b4f2d905b37643389f748d7a5906c17d192c6498c5907b75e19b048bee483d59641107301c85cc0e638e49d9d47df0acf70b612daf0fa48b009f8213cdc165bda5c30cfad91b183501d8807d7807c8a3d5c341dfc78d80da9d447641f538f04e0dd01cff00bb852ae6dc4b09ddb7c17241843cd8e25a6da613626384fa6e9320c5c9a4a25b0fe2780fbf0fd5c95f9fc16c647a10dee3803a826e736dd45712ace5007713152ddcd77bcedb47bc860fbf1d0b6bfcdae27bf1e0c3890b2c32bc1ec6cc65aeeec627b4ff0050c1f7e19ae97a20b5da01211d4f5ccf890b5b72589217b82ccf84a3603ed88f9ccad888e18d95b6cdf1deebe58badee08b8b42bb1d1b0d37d73adc9e704af1d5c01b7191394e0bb631254ea7d8dc59f88753b7468ebcced2c04bcce0e628d3c907e1881d9b10e638d85b381ef80e72321b533dc393bef07425d91712726f4232075609af52ba7b978598c9c268f6c5671ecacbd9bfcb2da9db497dc886dbc6d958da3258e3ccf6fce46896162fd963e8a75ea33f97f72c67525124617372618c0328268b504da54767f7647c6b41cc6b5331b10865e34f83f3694f6c3274e2d17894c9a8620ce98d96e66e1da5397cc0b9b27e29ae089ecd7edcb0727889cc28cebba5853c96496665f7f82f58ae1a4b1dbbb363d4fea4c728f70e279b00b8b9a4b1bfa3fb8c2b72644e361a81a2052255c1d48b6fbc92b10b6ce23329c64bed219341a414a98bb6defc4e172be172061febf303a6bbf89639cc05d5bbff7fe5ec84b53af66070c07d99e70bb5ee59d648f59c264bdeffc0fd580690ab38e108e5ab36afe97f44a6cb693d49d21bd00b70b0fe938e613c58b0e12b137ce261df88217713d35882d77dfc1f30ad65dc5ccd3f0ba4f21c4f2dc201753c0199f4cf1c6c3dec97d57c007f3ad8d4e02d0fc256fffc4001e11010101010101010101010100000000000100112131104120516171ffda0008010201013f109882cb2cb07b221f5b67fdb531b399c837db0b0b3f8623f8dececf7c6a278a58dfeb122c8f891e46b22fc3ae12a7e5d149db361fc5cb2cb3e3f0f89db58d5982e47e104f530e938e5937facf80b17af90f3cb581ea3fc5c70f2241e4cf38418d7b8b0b3f83db4b1f2cc9f8fcc65a439fcffc21ea1dfbf90ab7ee807215b6da4b1295e18c493ea7d7f52599f29fafbf968d990c2db73938b19064b1bc53a36edb0d5ae63ed964fb149094fb203202224fc645eca642f11ba072d3244d07b3e09ff11f03587d4b24ea545f53fafc38b36e15bea5999fc8f9ee385d1d9b796c726fd83f6c261f058e16aec335237c97062e773083e1d872384cbcf81c6c678b4ba7635712d9cb8b2dcf4441b0c850d840c8c9df87e007d8c3c9a9bfb15ecc0d2e01ec04b010433e3c7c585d4c790e9f1b96dd72efdb13df842cdab363fdb2c1e890127e487185d3cb18dfb66d1e4f3ae3c6e45e5d9d816a0ad8c404d0f06623608d7cb82e441f3b81fc29086f244f632c406e5a5779ecdd7e4bb3ff0056b737908e271a7906352ecfd57e5461183c433e008e1b082705f40586d72439c9ecf1dace6c1f9e5ac662e090ed80c08d428858f098762ded8f483f9077b0c396abb0bdc4664e7280c8941d2666fc6daf95b7e920ad46c38c08bb3cde32c7578f9db9282db0c04d873d888113cdb1fee13e108bd9d3db47937255f6cef23f5506096d871b1696832c054e79f12ce4634b5411cf9a1b0c9f3e59623bec219939761169264cf95a8eb278b31efc3161de22fd90c8dea3e34ea4425999347fc8b6bd9098b668e36dce6cf0c745fb3e7d86d126427d8831ed807f02f1bd601b6c58c3c46bb382ff006466c1677e5fffc4002510010002020104020203010000000000000100112131415161718191a1b1c1d1f0f1e1ffda0008010100013f10a8bcc0157495ac63c20aab2e565bd90e5beb2c19dc0538a6ab284c14374950711aef2e31580e252aa6a8401bb8114e84d91c40a311004ce44630695aa9c70c4279bc26bffbddbf13d381dbe098225a0a1ef884963c2ce208a3af07ec4644386fc256b89b0a658ddbc8d7696cd11de3331588161bc621d10c5e658ce91413a425a698cb77cc2c4e0bdd77ccbbbba62859156eb9f98d8291422afc32f26f425fe2095005b457e4a8569d260d74ac5fccce1bf451aa39bc73d607c0c36fba1e1cf38d4a96a2825532c3983da41c6c54af52a5e0732ccda95c16c828a6213a780464aae4371e6270003caff60a0c7207ca51006aaed988833532474e56d30c902f00ef53abb94c310d733dd6c796e3e42c2b81efcc1d0ae6f0cd3df3f885668210d31502e2e18109a90ee4b48f79c45e9e232265707985585057a3aafcfd4b1e01b135e4e226e00051ff0063517d3e26e59e252054ee1e22c94f7458ce7870cd649d8ff2958271e03a4e9bbe4819c9b4c11fee3b5461a5b2383afd4c15e5c41a0596554040d26a504ae2edcc255a0b317dbf7f51f5626b8abdbd7c4bfa86fa4c9f12828e27303cff006e548f94e2bd45ad69d66a5c944e4cab2c2a9e731b55b161b6bb240cb60bbadda39c8ad415912d1c481c79fa8a29c8a4b8b8b5573117b698a8ae1a80925dec852295982bfc2584a39259c8fd403c4edf305b594b616821e3bc4202f24c0695e92a20c13b667390f50687a91665260164b8444c01b7869b797440435d4e848f95ed2ff72c1591a9c79990584b2e0d755986838bc1de53c7b798e83cc33a420e515aafb09a49c0815b829a5a6d5d4bf8002b4854b51b2e7e61f9a5020a717a25fcf87b019b7715fa8948632e0a18a70fe6e02b98370eca7bd6fdb10019d4b444fafcca8008aae473f1513fd76945456a6ae747956f44596d60d1808db455b88268ddcad21c8ee02c055937f110154b77d63e007614b826a05f31c9a1a751b1718555407cc5aa1932679f7cc3b69200a3ba33ac1e02ea85d46f6e634aae52eee1f555ea6080865c2236906c97dc88d7044f1bfcc277b3a3a4e574acf129a1d2e16354532748b0c9db96626211e98a97860b15db786360134214f9ccb615e8971ea3e1d9e8f109838a30f302c84a0ac57523e04d9abae3ea3de5981dccc0d9f360fe094d35ff002041333771aba93d8c104af454402b6152cab3838e20238dd1836f2c4675634b4c1ac94a25b67479788bab3087ae331741aaa954d22d2391779b38aaae219adb498377598e1daa3574357f18e6e38d9bd4e5ae013abcf884753482ec50f55de6180a735e9441474cc6e9a7fd99430b21d202930b7266229bc2beff00c8a06151517cacbc5c16ea86c36984e2414fe25eac304b842c23e093806470662416bad434316a2d2fbc61871a25c1ba58b5c691b2c5929e3f530247921468099bcd3d48c6e2bb76b88068b6cf7190c428d401974402f668f6542ec2654a2dee1a3b8c3b41736b68d5fd45e517db6b48d462cbb749cbe3a97e352d15c0d4d7dae9116c5170c0f710ddd8dca8605045ee116b2dcc3e35b684a23bce55b2ea50144806a5491cfb10bfa4538a41f098de040a4b0c335e3f9d1f39711aaa31a2d96682f0c04e0bb3c4b6ad373838ab4ef124603b9a2c011ad6ed563b4bd17e10060686ee883c5bc8c0e9ef98afb51a15c69e6666c8979a8c36dda7fbedf528c468550f2879cd1ea0136803e1cfcdc2a22d5de365f88412212fae7998f104b55f654af5a1c8ff000c40e88158fc41e93d02466819aac3de5c91758578ef0cd42061583c25e0de835f89748c12a1d4c363ad401450c18bd5d9351c226eb2358dd4626b0bb40f797b105e058a5ab5c449165d108bf355158d70d0835feba45b595456dce6544b500baa55fc4beaa0ea008f1ab376122d806d633e258170694eaf5cfc4ac1a196589c9422174e6c46b8e93039585cb378f3710d40678258cc537bf002bf32c1deb8fa916c337b13af15e04ac2e532e334ecd31268d51572315de97a30db667140af09541cf6763f644aaa07adbbf80229374a2dd2a08331fb57f40128cf9cb2cd830509e206ddbd97897af31696b4f482609676879253e12803ac7e9ea18b4e14737aa3a95093020cc2e474710a885911c6a6a7dab01f32a417009aaef288944eaf051d7134774ef6c9fd5c6294ea3d66098134829db9976dd5ec21ae28d1bbec4ad4431d741fb1971644d426c70eb0962728dfb879cf372df7d43692934587ae7d4a4f36b5fc889956a146ce96b15c14eb2935692241ca1f3766611d589347f5860c28a467b3d2008dd097062e1c7a149dcb3f5172aa5dad6edf772b672b6c00d4ee32cbd18af2ccb2ead410844df56f27483e16024dbf6b3a444086a017ff002322898344638d92460f962e187054bee54831344ec03ea2c1204d2619b378aed0a20da1cbd7f1079c580cc375b80d5ecffac148f503bcf4efe670d3765e79f136fdf09bbef7cca02ba67cc459c540516da7a9c6dea04665806dbd6965abef01838319b814d424d2f521bcfb7b6386aaa05a037896141b54a7509b884981acdf1d3132242acd371ca8ddcac9899582c1fb80869c94a479258b9eef4745eb380f98687b14382218d02c8544375fb8288d4e40f367199523099560bdc6fae4304066dbc09c2c01ef7fe42c5d15d2af914fb82a1aa9c4eaa55f2115d3a12d95152aeea3abfba7b8a144bd9c8afc7a898a480daa61fd350ed482be40a5a898eca780ab11ce59c2bd89fddce8903e435fb8a8b742a8183b2588e26d003245d812d59d74617f3daf0f0c4005cab788622edf6b3430acd5472abc7de975f52da67af8edf1baf504994a1f529b64076979e7377573f647b0216381575fe4436895e519475c40e4b5ab71f8a66be18b48611ecfe2613504cd214afc44f86c2bc0928fd931ed12d700ed0d888d9f584e6c798451f9352da0c6a6768d0044f4cc746a4ae626573687cdb83dc5c23a0da5ab5d148c1a6cebcb1d91b7a8dd64bd908c79f212e3502e1dedaafb233bdbeaa3079ffb188e6898bae21a15a9a6ecff00598a3b2a1ca0cfa523005d03a26e50e1aaf69fd7d450552df93c7cca34b564d95b8960828e78bfe608c96eca16db13ec8ee62b46de59748ec4aab39360f46599e28d00e80183c4a6b2f44df3d2598281572c4a8418f60407881752f1ad46a058ef68a9bf6c4056d367c6235acc58ddbd5f399492a85579a44bf3f42562035335cdf623ee64167677c53e32fb9ad2e7a6cdfd3ee3f3e979c416f8a8de25a63287231f5183102efcf32fb0b023804e622a71b63e0ca0e2119748db1082b52f996986aa5caebf88be8a01b852eb1cea08804ad5b2f8874519a17abfe54ad74537d585ff00b2a4f39536d39f87dcf9fe11cb04b01f20e654cdf8b0aecbf52af0f0b474f7b60c60256e843119643a4467c05c65fccac3b7c0ff00952e329d21c31506e641d2580389ffd9	\N
48	V05333192	Josefa	Yolanda	Teran	de Cediel	Femenino	admin@yahoo.com	activo	\N	\N
49	V05027147	Heriberto		Cediel	Garcia	Masculino	heriberto.cediel@hotmail.com	activo	\N	1953-01-02
53	V33333333	Pedro		Perez		Masculino	asdasd@asdasd.com	elminado	\N	1986-03-05
52	V22222222	22222222222		22222222222		Masculino	asdad@asda.com	elminado	\N	1995-03-17
51	V01111111	Otra		Prueba		Masculino	as@sdad.com	elminado	\N	1995-03-01
50	V00000000	Representate		Prueba		Masculino	admin@yahoo.es	elminado	\N	1995-03-15
\.


--
-- Name: representantes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: johel
--

SELECT pg_catalog.setval('representantes_id_seq', 53, true);


--
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: johel
--

COPY roles (id, rol, status) FROM stdin;
1	administrador	activo
\.


--
-- Name: roles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: johel
--

SELECT pg_catalog.setval('roles_id_seq', 1, true);


--
-- Data for Name: sesiones; Type: TABLE DATA; Schema: public; Owner: johel
--

COPY sesiones (session_id, ip_address, user_agent, last_activity, user_data) FROM stdin;
bdf1f6b97fb0c6c561798a751462c495	::1	Mozilla/5.0 (X11; Linux i686; rv:18.0) Gecko/20100101 Firefox/18.0	1363933958	a:5:{s:9:"user_data";s:0:"";s:2:"id";s:1:"1";s:7:"usuario";s:5:"johel";s:6:"status";s:6:"activo";s:6:"acceso";s:179:"{"administrador":{"representantes":"lista de representantes,registrar representante,ver representante,editar representante,eliminar representante","usuarios":"lista de usuarios"}}";}
65cc424898ce4748c49fa4d4304fd5c9	::1	Mozilla/5.0 (X11; Linux i686; rv:18.0) Gecko/20100101 Firefox/18.0	1363910998	a:5:{s:9:"user_data";s:0:"";s:2:"id";s:1:"1";s:7:"usuario";s:5:"johel";s:6:"status";s:6:"activo";s:6:"acceso";s:179:"{"administrador":{"representantes":"lista de representantes,registrar representante,ver representante,editar representante,eliminar representante","usuarios":"lista de usuarios"}}";}
9e33bc06cf2ce48ad2dc3a61a319ad2c	::1	Mozilla/5.0 (X11; Linux i686; rv:18.0) Gecko/20100101 Firefox/18.0	1363656245	a:5:{s:9:"user_data";s:0:"";s:2:"id";s:1:"1";s:7:"usuario";s:5:"johel";s:6:"status";s:6:"activo";s:6:"acceso";s:179:"{"administrador":{"representantes":"lista de representantes,registrar representante,ver representante,editar representante,eliminar representante","usuarios":"lista de usuarios"}}";}
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: johel
--

COPY usuarios (id, usuario, clave, status, acceso, grupo, grupo_fkey, codigo_activacion) FROM stdin;
1	johel	e10adc3949ba59abbe56e057f20f883e	activo	{"administrador":{"representantes":"lista de representantes,registrar representante,ver representante,editar representante,eliminar representante","usuarios":"lista de usuarios"}}	administrativos	1	0
13	c3diel@yahoo.com	e10adc3949ba59abbe56e057f20f883e	activo	{"representante":{"representantes":"lista de representantes,registrar representante,ver representante,editar representante,eliminar representante"}}	representantes	46	2765d993c54ebd3a4f23ddb5d9ed1f00
14	jailyn8@gmail.com	e10adc3949ba59abbe56e057f20f883e	inactivo	{"representante":{"representantes":"lista de representantes,registrar representante,ver representante,editar representante,eliminar representante"}}	representantes	47	48314cf92a3e146f04fb0cdd134b5536
15	admin@yahoo.com	e10adc3949ba59abbe56e057f20f883e	inactivo	{"representante":{"representantes":"lista de representantes,registrar representante,ver representante,editar representante,eliminar representante"}}	representantes	48	67965e5a4c6f8548938b9d2a7dec6a9e
16	heriberto.cediel@hotmail.com	e10adc3949ba59abbe56e057f20f883e	inactivo	{"representante":{"representantes":"lista de representantes,registrar representante,ver representante,editar representante,eliminar representante"}}	representantes	49	c0b233d14b869e5ee079abfc2fc24c84
19	asdad@asda.com	e10adc3949ba59abbe56e057f20f883e	inactivo	{"representante":{"representantes":"lista de representantes,registrar representante,ver representante,editar representante,eliminar representante"}}	representantes	52	9cf0f1bf1597c9caeee5be70a65235b1
20	asdasd@asdasd.com	e10adc3949ba59abbe56e057f20f883e	inactivo	{"representante":{"representantes":"lista de representantes,registrar representante,ver representante,editar representante,eliminar representante"}}	representantes	53	5d4cc60da69d2ccedc08a8e16fc753f1
18	as@sdad.com	e10adc3949ba59abbe56e057f20f883e	elminado	{"representante":{"representantes":"lista de representantes,registrar representante,ver representante,editar representante,eliminar representante"}}	representantes	51	b958e287776b8733dddee7095227c82c
17	admin@yahoo.es	e10adc3949ba59abbe56e057f20f883e	elminado	{"representante":{"representantes":"lista de representantes,registrar representante,ver representante,editar representante,eliminar representante"}}	representantes	50	fb426d79bf833201d8172e30ce8711c6
\.


--
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: johel
--

SELECT pg_catalog.setval('usuarios_id_seq', 20, true);


--
-- Name: administrativos_cedula_key; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY administrativos
    ADD CONSTRAINT administrativos_cedula_key UNIQUE (cedula);


--
-- Name: administrativos_pkey; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY administrativos
    ADD CONSTRAINT administrativos_pkey PRIMARY KEY (id);


--
-- Name: alumnos_pkey; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY alumnos
    ADD CONSTRAINT alumnos_pkey PRIMARY KEY (id);


--
-- Name: alumnos_representantes_pkey; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY alumnos_representantes
    ADD CONSTRAINT alumnos_representantes_pkey PRIMARY KEY (id);


--
-- Name: docentes_cedula_key; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY docentes
    ADD CONSTRAINT docentes_cedula_key UNIQUE (cedula);


--
-- Name: docentes_pkey; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY docentes
    ADD CONSTRAINT docentes_pkey PRIMARY KEY (id);


--
-- Name: empleados_cedula_key; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY empleados
    ADD CONSTRAINT empleados_cedula_key UNIQUE (cedula);


--
-- Name: empleados_pkey; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY empleados
    ADD CONSTRAINT empleados_pkey PRIMARY KEY (id);


--
-- Name: modulos_modulo_key; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY modulos
    ADD CONSTRAINT modulos_modulo_key UNIQUE (modulo);


--
-- Name: modulos_permisos_pkey; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY modulos_permisos
    ADD CONSTRAINT modulos_permisos_pkey PRIMARY KEY (id);


--
-- Name: modulos_pkey; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY modulos
    ADD CONSTRAINT modulos_pkey PRIMARY KEY (id);


--
-- Name: permisos_permiso_key; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY permisos
    ADD CONSTRAINT permisos_permiso_key UNIQUE (permiso);


--
-- Name: permisos_pkey; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY permisos
    ADD CONSTRAINT permisos_pkey PRIMARY KEY (id);


--
-- Name: representantes_cedula_key; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY representantes
    ADD CONSTRAINT representantes_cedula_key UNIQUE (cedula);


--
-- Name: representantes_pkey; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY representantes
    ADD CONSTRAINT representantes_pkey PRIMARY KEY (id);


--
-- Name: roles_pkey; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);


--
-- Name: roles_rol_key; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY roles
    ADD CONSTRAINT roles_rol_key UNIQUE (rol);


--
-- Name: sesiones_pkey; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY sesiones
    ADD CONSTRAINT sesiones_pkey PRIMARY KEY (session_id);


--
-- Name: usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: johel; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- Name: alumnos_representantes_alumno_fkey_fkey; Type: FK CONSTRAINT; Schema: public; Owner: johel
--

ALTER TABLE ONLY alumnos_representantes
    ADD CONSTRAINT alumnos_representantes_alumno_fkey_fkey FOREIGN KEY (alumno_fkey) REFERENCES alumnos(id);


--
-- Name: alumnos_representantes_representante_fkey_fkey; Type: FK CONSTRAINT; Schema: public; Owner: johel
--

ALTER TABLE ONLY alumnos_representantes
    ADD CONSTRAINT alumnos_representantes_representante_fkey_fkey FOREIGN KEY (representante_fkey) REFERENCES representantes(id);


--
-- Name: modulos_permisos_modulo_fkey_fkey; Type: FK CONSTRAINT; Schema: public; Owner: johel
--

ALTER TABLE ONLY modulos_permisos
    ADD CONSTRAINT modulos_permisos_modulo_fkey_fkey FOREIGN KEY (modulo_fkey) REFERENCES modulos(id);


--
-- Name: modulos_permisos_permiso_fkey_fkey; Type: FK CONSTRAINT; Schema: public; Owner: johel
--

ALTER TABLE ONLY modulos_permisos
    ADD CONSTRAINT modulos_permisos_permiso_fkey_fkey FOREIGN KEY (permiso_fkey) REFERENCES permisos(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

