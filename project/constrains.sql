ALTER TABLE coolers ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE processors ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE motherboards ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE memory ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE harddrive ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE videocards ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE powerblocks ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE corpus ADD FOREIGN KEY (companyId) REFERENCES companies(id);

ALTER TABLE processors ADD FOREIGN KEY (socketId) REFERENCES sockets(id);
ALTER TABLE motherboards ADD FOREIGN KEY (socketId) REFERENCES sockets(id);

ALTER TABLE users ADD FOREIGN KEY (roleId) REFERENCES roles(id);

ALTER TABLE user_build ADD FOREIGN KEY (userId) REFERENCES users(id);
ALTER TABLE user_build ADD FOREIGN KEY (buildId) REFERENCES builds(id);

ALTER TABLE builds ADD FOREIGN KEY (processorId) REFERENCES processors(id);
ALTER TABLE builds ADD FOREIGN KEY (coolerId) REFERENCES coolers(id);
ALTER TABLE builds ADD FOREIGN KEY (motherboardId) REFERENCES motherboards(id);
ALTER TABLE builds ADD FOREIGN KEY (memoryId) REFERENCES memory(id);
ALTER TABLE builds ADD FOREIGN KEY (harddriveId) REFERENCES harddrives(id);
ALTER TABLE builds ADD FOREIGN KEY (videocardId) REFERENCES videocards(id);
ALTER TABLE builds ADD FOREIGN KEY (powerblockId) REFERENCES powerblocks(id);

ALTER TABLE user_build ADD UNIQUE `unique` (`userId`, `buildId`);