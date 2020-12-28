CREATE TABLE Employee
    ( eID     		  NUMBER(5) NOT NULL,
      eFirstName          VARCHAR(255) NOT NULL,
      eLastName           VARCHAR(255) NOT NULL,
      eUsername           VARCHAR(255) NOT NULL,
      ePassword           VARCHAR(255) NOT NULL,
      Country             VARCHAR(255) NOT NULL,
      City                VARCHAR(255) NOT NULL,
      Street              VARCHAR(255) NOT NULL,
      ePhoneNo            VARCHAR(255) NOT NULL,
      primary key(eID)
    );



CREATE TABLE Supplier
    ( sID     		 NUMBER(5) NOT NULL,
      sName          	 VARCHAR(255) NOT NULL,
      sPhoneNo           VARCHAR(255) NOT NULL,
      primary key(sID)
    );


CREATE TABLE item_Group
    ( gID     		 NUMBER(5) NOT NULL,
      gName              VARCHAR(255) NOT NULL,
      primary key(gID)
    );


CREATE TABLE Stock
    ( stockID     	 NUMBER(5) NOT NULL,
      stockWeight        VARCHAR(255) NOT NULL,
      stockCount       	 NUMBER(5) NOT NULL,
      primary key(stockID)
    );





CREATE TABLE Shipment
    ( shipmentID          	NUMBER(5) NOT NULL,
      sID                 	NUMBER(5) NOT NULL,
      dt          	  	DATE,
      time                	VARCHAR(255) NOT NULL,
      primary key(shipmentID),
      foreign key(sID) references Supplier(sID)
    );

CREATE TABLE items
    ( itemID              NUMBER(5) NOT NULL,
      eID     		  NUMBER(5) NOT NULL,
      sID     		  NUMBER(5) NOT NULL,
      gID     		  NUMBER(5) NOT NULL,
      stockID     		  NUMBER(5) NOT NULL,
      shipmentID     		  NUMBER(5) NOT NULL,
      itemName            VARCHAR(255) NOT NULL,
      itemCost           NUMBER(5) NOT NULL,
      itemBrand           VARCHAR(255) NOT NULL,
      itemCount           NUMBER(5) NOT NULL,
      primary key(itemID),
      foreign key(eID) references Employee(eID),
      foreign key(sID) references Supplier(sID),
      foreign key(gID) references item_Group(gID),
      foreign key(stockID) references Stock(stockID),
      foreign key(shipmentID) references Shipment(shipmentID)
    );
INSERT INTO employee VALUES 
      ( 1
       , 'David'
       , 'Korenke'
       , 'devkor'  
       , 'abcd'
       , 'Pakistan' 
       , 'Islamabad'
        , 'F11/1 ST1'
        , '0900-7854542'
        );

INSERT INTO employee VALUES 
      ( 2
       , 'Haris'
       , 'Faisal'
       , 'harfai'  
       , 'efgh'
       , 'Pakistan' 
       , 'Islamabad'
        , 'F10/2 ST12'
        , '0910-7854541'
        );


INSERT INTO employee VALUES 
      ( 3
       , 'Muhammad'
       , 'Asim'
       , 'MuhAsi'  
       , 'ijkl'
       , 'Pakistan' 
       , 'RawalPindi'
        , 'Street 3'
        , '0897-4486545'
        );
INSERT INTO supplier VALUES 
      ( 1
       , 'Usman'
       , '6487-87897725' 
        );

INSERT INTO supplier VALUES 
      ( 2
       , 'Kaisser'
       , '8799-98789545	' 
        );


INSERT INTO supplier VALUES 
      ( 3
       , 'Awan'
       , '8784-89785454' 
        );

INSERT INTO item_Group VALUES 
      ( 1
       , 'Dairy' 
        );

INSERT INTO item_Group VALUES 
      ( 2
       , 'Snacks' 
        );
INSERT INTO stock VALUES 
      ( 1
       , '50kg' 
       , 5 
        );

INSERT INTO stock VALUES 
      ( 2
       , '50kg'
       , 5 
        );

INSERT INTO stock VALUES 
      ( 3
       , '50kg'
       , 5  
        );

INSERT INTO shipment VALUES 
      ( 1
       , 1
       , To_DATE('2020/12/26','YYYY-MM-DD')
       , '9:25pm'
        );


INSERT INTO shipment VALUES 
      ( 2
       , 2
       , To_DATE('2020/11/29','YYYY-MM-DD')
       , '10:15pm'
        );


INSERT INTO shipment VALUES 
      ( 3
       , 3
       , To_DATE('2020/10/23','YYYY-MM-DD')
       , '8:10pm'
        );
INSERT INTO items VALUES 
      ( 1
       , 1 
       , 1
       , 1
       , 1
       , 1
       , 'Kitkat'
       , 80  
       , 'Nestle'
       , '50'
        );

INSERT INTO items VALUES 
      ( 2
       , 1
       , 2
       , 1
       , 2
       , 2
       , 'Dairy Milk'
       , 80  
       , 'Cadbury'
       , '50'
        );

INSERT INTO items VALUES 
      ( 3
       , 2
       , 3
       , 1
       , 3
       , 3
       , 'Perk'
       , 50  
       , 'Cadbury'
       , '50'
        );

