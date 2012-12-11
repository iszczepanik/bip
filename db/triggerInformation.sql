DELIMITER $$

CREATE TRIGGER `astem`.`set_order_number` BEFORE INSERT on `astem`.`form_plan`
FOR EACH ROW BEGIN	

	SELECT COUNT(*) INTO @order_count FROM form_plan
	WHERE 	(NEW.parent_form_plan_id > 0 AND parent_form_plan_id = NEW.parent_form_plan_id) OR
		(parent_form_plan_id=0 AND form_plan_id=NEW.parent_form_plan_id);
	if @order_count > 0 THEN
		SELECT number INTO @old_number FROM form_plan
		WHERE form_plan_id=NEW.parent_form_plan_id AND parent_form_plan_id=0;
		SET NEW.number=CONCAT(@old_number, '/', @order_count);
	ELSE
		SELECT COUNT(*)+1 INTO @order_count_on_month FROM form_plan
		WHERE MONTH(form_plan.date_add)=MONTH(NEW.date_add);
		SET NEW.number=CONCAT(@order_count_on_month, '/',DATE_FORMAT(NEW.date_add, '%m'));
	END IF;
	END IF;

	SET NEW.date_create = NOW();
END;
$$

DELIMITER ;




DROP TRIGGER IF EXISTS AddHistoryInformationRecord $$


CREATE TRIGGER AddHistoryInformationRecord AFTER UPDATE on `inf`
FOR EACH ROW BEGIN	
	
	INSERT INTO `inf_hist` (`INF_ID`, `INF_CONTENT`, `INF_MODIFY_DATE`, `INF_MODIFY_BY`)
	VALUES
	(
		OLD.INF_ID
		,OLD.INF_CONTENT
		,NEW.INF_MODIFY_DATE 	 	 	 	 	 	
		,NEW.INF_MODIFY_BY
	);
	
END$$

(Delimiter: $$)


