

CREATE TABLE public.user3
(
    id integer NOT NULL DEFAULT nextval('user3_id_seq'::regclass),
    name character varying(30) COLLATE pg_catalog."default" NOT NULL,
    city character varying(30) COLLATE pg_catalog."default" NOT NULL,
    age integer,
    CONSTRAINT user3_pkey PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.user3
    OWNER to postgres;



ALTER TABLE public.user3
    ADD CONSTRAINT user3_pkey PRIMARY KEY (id);

INSERT INTO user3 (id, name,  city, age)
VALUES
       (1, 'Liza', 'Niko', 29),
       (2, 'Val', 'Niko', 32),
       (3, 'Anna', 'Niko', 18),
       (5, 'Nick', 'NY', 21),
       (6, 'Anna', 'Niko', 18),
       (7, 'Madonna', 'NY', 50),
       (8, 'Cardinal', 'Stavanger', 34),
       (9, 'liza`', 'Niko', 29);


