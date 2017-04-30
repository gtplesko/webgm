CREATE TABLE user_content_tables (
    id SERIAL,
    title VARCHAR(100),
    description TEXT,
    machine_name VARCHAR(30) NOT NULL,
    parent_id BIGINT UNSIGNED,

    PRIMARY KEY (id),
    FORIEGN KEY (parent_id) REFERENCES user_content_tables(id)
    UNIQUE KEY (machine_name, parent_id)
);

