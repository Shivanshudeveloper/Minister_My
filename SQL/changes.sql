ALTER TABLE `videos` ADD `seton` TEXT NOT NULL AFTER `video`;
UPDATE video SET seton = "Both";