DELETE FROM `sit` WHERE `sit`.`SIT_NAME` = 'Oferta';

SELECT * FROM `inf` where `INF_SIT_ID` in (6,10) or `INF_NAME` = 'Zbiórki publiczne';
UPDATE `inf` SET `INF_OBLIGATORY` = 0, `INF_MODIFY_DATE` = '2013-02-24 12:53:00', `INF_MODIFY_BY` = 1 where `INF_SIT_ID` in (6,10) or `INF_NAME` = 'Zbiórki publiczne';

ALTER TABLE  `nws` ADD  `NWS_BIP` BOOLEAN NOT NULL DEFAULT  '0';