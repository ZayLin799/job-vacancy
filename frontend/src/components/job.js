import axios from "axios";
import React, { useState, useEffect } from "react";
import Card from "react-bootstrap/Card";

const Job = () => {
  const baseURL = "http://localhost:8000/";
  const [job, setJob] = useState();
  const fetchData = () => {
    axios.get(`${baseURL}getJobs`).then((response) => {
      console.log("aa", response.data);
      setJob(response.data);
    });
  };
  useEffect(() => {
    fetchData();
  }, []);

  console.log(job);
  return (
    <div>
      {job != undefined &&
        job.map((item) => {
          console.log("qweq", item);

          return (
            <div>
              <div class="container">
                <div className="container-fluid p-4" id="change_nav">
                  <div className="row justify-content-center align-items-center">
                    <div className="card recent_job" style={{ width: "18rem" }}>
                      <div className="card-body">
                        <h5 className="card-title">{item.position}</h5>
                        <h6 className="card-subtitle mb-2 text-muted">
                          {item.job_description}
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          );
        })}
    </div>
  );
};

export default Job;
