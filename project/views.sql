CREATE VIEW build_view AS SELECT builds.id, processors.name AS processor, coolers.name AS cooler, builds.coolerCount, motherboards.name AS motherboard, memorys.name AS memory, builds.memoryCount, harddrives.name AS harddrive, builds.harddriveCount, videocards.name AS videocard, powerblocks.name AS powerblock, corpuses.name AS corpus FROM builds INNER JOIN processors ON builds.processorId = processors.id INNER JOIN coolers ON builds.coolerId = coolers.id INNER JOIN motherboards ON builds.coolerId = motherboards.id INNER JOIN memorys ON builds.memoryId = memorys.id INNER JOIN harddrives ON builds.harddriveId = harddrives.id INNER JOIN videocards ON builds.videocardId = videocards.id INNER JOIN powerblocks ON builds.powerblockId = powerblocks.id INNER JOIN corpuses ON builds.corpusId = corpuses.id

CREATE VIEW coolers_view AS SELECT name, type, rotationsMin, rotationsMax, connector, price, companies.name AS companyName FROM coolers INNER JOIN companies ON coolers.companyId = companies.id;
CREATE VIEW corpuses_view AS SELECT corpuses.*, companies.name AS companyName FROM corpuses INNER JOIN companies ON corpuses.companyId = companies.id;
CREATE VIEW harddrives_view AS SELECT harddrives.*, companies.name AS companyName FROM harddrives INNER JOIN companies ON harddrives.companyId = companies.id;
CREATE VIEW memorys_view AS SELECT memorys.*, companies.name AS companyName FROM memorys INNER JOIN companies ON memorys.companyId = companies.id;
CREATE VIEW motherboards_view AS SELECT motherboards.*, companies.name AS companyName FROM motherboards INNER JOIN companies ON motherboards.companyId = companies.id;
CREATE VIEW powerblocks_view AS SELECT powerblocks.*, companies.name AS companyName FROM powerblocks INNER JOIN companies ON powerblocks.companyId = companies.id;
CREATE VIEW processors_view AS SELECT processors.*, companies.name AS companyName FROM processors INNER JOIN companies ON processors.companyId = companies.id;
CREATE VIEW videocards_view AS SELECT videocards.*, companies.name AS companyName FROM videocards INNER JOIN companies ON videocards.companyId = companies.id;

