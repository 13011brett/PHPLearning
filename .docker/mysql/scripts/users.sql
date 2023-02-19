create table myapp.users
(
    id    int auto_increment,
    name  varchar(255) not null,
    email varchar(255) not null,
    constraint id
        unique (id),
    constraint users_email_idx
        unique (email)
);

create table myapp.notes
(
    id      int auto_increment
        primary key,
    body    text not null,
    user_id int  not null,
    subject text not null,
    constraint notes_ibfk_1
        foreign key (user_id) references myapp.users (id)
            on delete cascade
);

create index user_id
    on myapp.notes (user_id);


INSERT INTO myapp.users (name, email)
VALUES ('tester', 'tester@test.com');

