/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     3/18/2015 7:02:08 PM                         */
/*==============================================================*/



/*==============================================================*/
/* Table: ABSENSI                                               */
/*==============================================================*/
create table ABSENSI
(
   ID_ABSENSI           varchar(20) not null,
   ID_MURID             int,
   ID_GURU              int,
   KETERANGAN_ABSEN     char(1),
   TIMESTAMP_ABSEN      timestamp
);

alter table ABSENSI
   add primary key (ID_ABSENSI);

/*==============================================================*/
/* Table: DATA_EKSKUL                                           */
/*==============================================================*/
create table DATA_EKSKUL
(
   ID_DATAEKSKUL        varchar(20) not null,
   ID_EKSKUL            varchar(20),
   ID_MURID             int,
   NILAI_EKSKUL         int,
   TIMESTAMP_N_EKSKUL   timestamp
);

alter table DATA_EKSKUL
   add primary key (ID_DATAEKSKUL);

/*==============================================================*/
/* Table: DATA_KELAKUAN_SISWA                                   */
/*==============================================================*/
create table DATA_KELAKUAN_SISWA
(
   ID_DATA              int not null,
   ID_MURID             int,
   ID_GURU              int,
   ID_KELAKUAN          int,
   TIMESTAMP            timestamp,
   KETERANGAN_KELAKUAN  text
);

alter table DATA_KELAKUAN_SISWA
   add primary key (ID_DATA);

/*==============================================================*/
/* Table: DIBINA_OLEH                                           */
/*==============================================================*/
create table DIBINA_OLEH
(
   ID_KELAS             int not null,
   ID_GURU              int not null,
   TAHUN_ANGKATAN       varchar(10)
);

alter table DIBINA_OLEH
   add primary key (ID_KELAS, ID_GURU);

/*==============================================================*/
/* Table: EKSKUL                                                */
/*==============================================================*/
create table EKSKUL
(
   ID_EKSKUL            varchar(20) not null,
   ID_GURU              int,
   NAMA_EKSKUL          varchar(50)
);

alter table EKSKUL
   add primary key (ID_EKSKUL);

/*==============================================================*/
/* Table: GURU                                                  */
/*==============================================================*/
create table GURU
(
   ID_GURU              int not null,
   ID_MATA_PELAJARAN    int,
   NAMA_GURU            varchar(100),
   NIP                  int,
   USERNAME_GURU        varchar(20),
   PASSWORD_GURU        varchar(1024),
   ALAMAT_GURU          varchar(1024),
   NOMOR_TELEPON_GURU   int,
   JENIS_KELAMIN_GURU   varchar(2),
   EMAIL_GURU           varchar(30),
   JABATAN_GURU         varchar(50)
);

alter table GURU
   add primary key (ID_GURU);

/*==============================================================*/
/* Table: JENIS_PENILAIAN                                       */
/*==============================================================*/
create table JENIS_PENILAIAN
(
   ID_JENISNILAI        varchar(20) not null,
   JENIS_NILAI          varchar(50)
);

alter table JENIS_PENILAIAN
   add primary key (ID_JENISNILAI);

/*==============================================================*/
/* Table: KELAKUAN                                              */
/*==============================================================*/
create table KELAKUAN
(
   ID_KELAKUAN          int not null,
   ID_GURU              int,
   NAMA_KELAKUAN        varchar(100),
   POIN_PERKELAKUAN     int
);

alter table KELAKUAN
   add primary key (ID_KELAKUAN);

/*==============================================================*/
/* Table: KELAS                                                 */
/*==============================================================*/
create table KELAS
(
   ID_KELAS             int not null,
   NAMA_KELAS           varchar(10)
);

alter table KELAS
   add primary key (ID_KELAS);

/*==============================================================*/
/* Table: MATA_PELAJARAN                                        */
/*==============================================================*/
create table MATA_PELAJARAN
(
   ID_MATA_PELAJARAN    int not null,
   NAMA_MATA_PELAJARAN  varchar(100),
   NILAI_SKM            int
);

alter table MATA_PELAJARAN
   add primary key (ID_MATA_PELAJARAN);

/*==============================================================*/
/* Table: MURID                                                 */
/*==============================================================*/
create table MURID
(
   ID_MURID             int not null,
   ID_KELAS             int,
   NAMA                 varchar(100),
   NISN                 int,
   USERNAME             varchar(20),
   PASSWORD             varchar(1024),
   ALAMAT               varchar(1024),
   NOMOR_TELEPON        int,
   JENIS_KELAMIN        varchar(2),
   EMAIL                varchar(30),
   TANGGAL_LAHIR        date,
   AYAH                 varchar(200),
   IBU                  varchar(200),
   PEKERJAAN_ORTU       varchar(100),
   GAJI                 int,
   TAHUN1               varchar(5),
   TAHUN2               varchar(5),
   TAHUN3               varchar(5),
   POIN_KELAKUAN        int
);

alter table MURID
   add primary key (ID_MURID);

/*==============================================================*/
/* Table: NILAI_MAPEL                                           */
/*==============================================================*/
create table NILAI_MAPEL
(
   ID_NILAI             int not null,
   ID_MATA_PELAJARAN    int,
   ID_GURU              int,
   ID_MURID             int,
   ID_JENISNILAI        varchar(20),
   JENIS_NILAI          varchar(100),
   TIMESTAMP_NILAI      timestamp,
   NILAI_MATPEL         int
);

alter table NILAI_MAPEL
   add primary key (ID_NILAI);

alter table ABSENSI add constraint FK_MENGALAMI foreign key (ID_MURID)
      references MURID (ID_MURID) on delete restrict on update restrict;

alter table ABSENSI add constraint FK_RELATIONSHIP_15 foreign key (ID_GURU)
      references GURU (ID_GURU) on delete restrict on update restrict;

alter table DATA_EKSKUL add constraint FK_MENGIKUTI foreign key (ID_MURID)
      references MURID (ID_MURID) on delete restrict on update restrict;

alter table DATA_EKSKUL add constraint FK_RELATIONSHIP_12 foreign key (ID_EKSKUL)
      references EKSKUL (ID_EKSKUL) on delete restrict on update restrict;

alter table DATA_KELAKUAN_SISWA add constraint FK_BERADA_DALAM foreign key (ID_KELAKUAN)
      references KELAKUAN (ID_KELAKUAN) on delete restrict on update restrict;

alter table DATA_KELAKUAN_SISWA add constraint FK_MENGISI foreign key (ID_GURU)
      references GURU (ID_GURU) on delete restrict on update restrict;

alter table DATA_KELAKUAN_SISWA add constraint FK_TERCANTUM foreign key (ID_MURID)
      references MURID (ID_MURID) on delete restrict on update restrict;

alter table DIBINA_OLEH add constraint FK_DIBINA_OLEH foreign key (ID_KELAS)
      references KELAS (ID_KELAS) on delete restrict on update restrict;

alter table DIBINA_OLEH add constraint FK_DIBINA_OLEH2 foreign key (ID_GURU)
      references GURU (ID_GURU) on delete restrict on update restrict;

alter table EKSKUL add constraint FK_MEMBIMBING foreign key (ID_GURU)
      references GURU (ID_GURU) on delete restrict on update restrict;

alter table GURU add constraint FK_MENGAJAR foreign key (ID_MATA_PELAJARAN)
      references MATA_PELAJARAN (ID_MATA_PELAJARAN) on delete restrict on update restrict;

alter table KELAKUAN add constraint FK_MEMBERI foreign key (ID_GURU)
      references GURU (ID_GURU) on delete restrict on update restrict;

alter table MURID add constraint FK_MENDUDUKI foreign key (ID_KELAS)
      references KELAS (ID_KELAS) on delete restrict on update restrict;

alter table NILAI_MAPEL add constraint FK_MEMBERIKAN foreign key (ID_GURU)
      references GURU (ID_GURU) on delete restrict on update restrict;

alter table NILAI_MAPEL add constraint FK_MEMILIKI_2 foreign key (ID_MURID)
      references MURID (ID_MURID) on delete restrict on update restrict;

alter table NILAI_MAPEL add constraint FK_MEMPUNYAI foreign key (ID_MATA_PELAJARAN)
      references MATA_PELAJARAN (ID_MATA_PELAJARAN) on delete restrict on update restrict;

alter table NILAI_MAPEL add constraint FK_REFERENCE_17 foreign key (ID_JENISNILAI)
      references JENIS_PENILAIAN (ID_JENISNILAI) on delete restrict on update restrict;

