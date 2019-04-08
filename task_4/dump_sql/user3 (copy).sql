
-- Table: public.user3

-- DROP TABLE public.user3;

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

