import axios from "axios";
import React, { useState, useEffect } from "react";
import Button from "react-bootstrap/Button";
import Card from "react-bootstrap/Card";

const Job = () => {
  const baseURL = "http://localhost:8000/";
  const [job, setJob] = useState();
  const fetchData = () => {
    axios.get(`${baseURL}getJobs`).then((response) => {
      setJob(response.data);
    });
  };
  useEffect(() => {
    fetchData();
  }, []);

  console.log(job);
  return (
    <div mb-3>
      {job != undefined &&
        job.map((item) => {
          return (
            <Card
              style={{
                display: `flex`,
                flexDirection: `row`,
                justifyContent: `center`,
                margin: "50px",
              }}
            >
              <Card.Body>
                <Card.Title>{item.position}</Card.Title>
                <Card.Text>{item.job_description}</Card.Text>
                <Button variant="primary">See More</Button>
              </Card.Body>
            </Card>
          );
        })}
    </div>
  );
};

export default Job;
