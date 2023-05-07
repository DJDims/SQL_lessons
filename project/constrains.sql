ALTER TABLE coolers ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE processors ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE motherboards ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE memorys ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE harddrives ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE videocards ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE powerblocks ADD FOREIGN KEY (companyId) REFERENCES companies(id);
ALTER TABLE corpuses ADD FOREIGN KEY (companyId) REFERENCES companies(id);

ALTER TABLE processors ADD FOREIGN KEY (socketId) REFERENCES sockets(id);
ALTER TABLE motherboards ADD FOREIGN KEY (socketId) REFERENCES sockets(id);

ALTER TABLE builds ADD FOREIGN KEY (processorId) REFERENCES processors(id);
ALTER TABLE builds ADD FOREIGN KEY (coolerId) REFERENCES coolers(id);
ALTER TABLE builds ADD FOREIGN KEY (motherboardId) REFERENCES motherboards(id);
ALTER TABLE builds ADD FOREIGN KEY (memoryId) REFERENCES memorys(id);
ALTER TABLE builds ADD FOREIGN KEY (harddriveId) REFERENCES harddrives(id);
ALTER TABLE builds ADD FOREIGN KEY (videocardId) REFERENCES videocards(id);
ALTER TABLE builds ADD FOREIGN KEY (powerblockId) REFERENCES powerblocks(id);
ALTER TABLE builds ADD FOREIGN KEY (corpusId) REFERENCES corpuses(id);
ALTER TABLE builds ADD FOREIGN KEY (userId) REFERENCES users(id);