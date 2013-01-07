DROP TRIGGER IF EXISTS AddHistoryInformationRecord $$

CREATE TRIGGER AddHistoryInformationRecord AFTER UPDATE on `inf`
FOR EACH ROW BEGIN	
	
	INSERT INTO `inf_hist` (`INF_HIST_INF_ID`, `INF_CONTENT`, `INF_MODIFY_DATE`, `INF_MODIFY_BY`)
	VALUES
	(
		OLD.INF_ID
		,OLD.INF_CONTENT
		,NEW.INF_MODIFY_DATE 	 	 	 	 	 	
		,NEW.INF_MODIFY_BY
	);
	
END$$

(Delimiter: $$)


