ALTER TABLE `session_master` CHANGE COLUMN `iscurrent` `iscurrent` TINYINT(1) NOT NULL  ;

ALTER TABLE `student` CHANGE COLUMN `ishostler` `ishostler` TINYINT(1) NOT NULL  , CHANGE COLUMN `isScholared` `isScholared` TINYINT(1) NULL DEFAULT NULL  , 
  ADD CONSTRAINT `fk_student_scholars_master`
  FOREIGN KEY (`scholar_id` )
  REFERENCES `scholars_master` (`id` )
  ON DELETE CASCADE
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_student_class_master1`
  FOREIGN KEY (`class_id` )
  REFERENCES `class_master` (`id` )
  ON DELETE CASCADE
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_student_session_master1`
  FOREIGN KEY (`session_id` )
  REFERENCES `session_master` (`id` )
  ON DELETE CASCADE
  ON UPDATE NO ACTION
, ADD INDEX `fk_student_scholars_master` (`scholar_id` ASC) 
, ADD INDEX `fk_student_class_master1` (`class_id` ASC) 
, ADD INDEX `fk_student_session_master1` (`session_id` ASC) ;
