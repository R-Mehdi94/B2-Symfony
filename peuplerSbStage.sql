use sbRE;

insert into animateur(id,nom,prenom) values(1,"BELLIL","Mehdi"),(2,"AIT DAWOUD","Walid"),(3,"AMROUCHIE","Ahmed");

insert into client(id,nom,prenom) values(1,"BOUCHOUICHA","Souheil"),(2,"BRUTUS","Loic"),(3,"JSP","ALI");

insert into specialiste(id,nom,prenom) values(1,"JSP","Wiliam"),(2,"BOURGET","Theophile"),(3,"jsp","Gauvin");

insert into stage(id,animateur_id,date_debut,nb_jours) values(1,2,"2022/10/12",1),(2,3,"2022/8/5",4),(3,1,"2022/11/12",5);

insert into intervenir(id,stage_id,specialiste_id,nb_heures) values(1,2,3,2),(3,1,2,4),(2,3,1,1);

insert into stage_client(stage_id,client_id) values(1,3),(2,1),(3,2)